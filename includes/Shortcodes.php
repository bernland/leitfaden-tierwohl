<?php

namespace Schenkenfelder\LeitfadenTierwohl;

class Shortcodes {

	const SAVE = 'Antworten';
	const NEXT = 'Weiter';
	const ANSWER_0 = 'Nein';
	const ANSWER_1 = 'Ja';

	public static function leitfaden_tierwohl( $attributes ) {
		global $post;
		global $wpdb;

		$ret = '';

		if ( get_current_user_id() === 0 ) {
			$ret .= '<a href="/wp-login.php?redirect_to=%2F' . $post->post_name . '">Log-in</a>';
		} else {
			$values = shortcode_atts( array(
				'quiz' => 1
			), $attributes );

			/**
			 * I N I T   S E S S I O N
			 */
			if ( ( !(isset( $_SESSION['quiz'] ) ) || $_SESSION['quiz'] !== $values['quiz'] ) || !isset( $_SESSION['records'] ) || !isset( $_SESSION['data']) || !isset( $_SESSION['q'] ) || !isset( $_SESSION['a'] ) ) {
				self::init_session( $values['quiz'] );
			}

			if ( isset( $_POST['lftw'] ) && (int) $_POST['lftw'] === $_SESSION['r'] && isset( $_POST['lftw_answer'] ) && $_SESSION['s'] === self::SAVE ) {
				$answer = (int) $_POST['lftw_answer'];
				if ( $answer === $_SESSION['a'] ) {
					if ( $answer === 0 ) {
						$_SESSION['data'][0]++;
					} else {
						$_SESSION['data'][3]++;
					}
					$_SESSION['t'][$_SESSION['q']] = 1;
				} else {
					if ( $_SESSION['a'] === 1 && $answer === 0 ) {
						$_SESSION['data'][1]++;
					} else {
						$_SESSION['data'][2]++;
					}
					$_SESSION['t'][$_SESSION['q']] = 0;
				}

				$_SESSION['s'] = self::NEXT;
			} else if ( $_SESSION['s'] === self::NEXT ) {
				$_SESSION['q']++;
				$_SESSION['r'] = rand( 100000, 999999 );
				if ( $_SESSION['q'] <= count( $_SESSION['records']['media'] ) ) {
					$_SESSION['a'] = $_SESSION['records']['media'][$_SESSION['q']-1]['val'];
				}
				$_SESSION['s'] = self::SAVE;
			}

			if ( $_SESSION['q'] === count( $_SESSION['records']['media'] ) + 1  ) {
				// end of quiz
				$a = $_SESSION['data'][0];
				$b = $_SESSION['data'][1];
				$c = $_SESSION['data'][2];
				$d = $_SESSION['data'][3];
				$n_1 = $a+$c;
				$n_0 = $b+$d;
				$m_1 = $a+$b;
				$m_0 = $c+$d;
				$n = $a + $b + $c + $d;

				$p_0 = ( $a +$d ) / $n;
				$p_e = ( ( $n_1/$n ) * ( $m_1/$n ) ) + ( ( $n_0/$n) * ( $m_0/$n) );

				// division by zero
				if ( 1-$p_e !== 0 ) {
					$kappa = ( $p_0-$p_e ) / ( 1-$p_e );
				} else {
					$kappa = 0;
				}

				$ret  = 'Sie haben ' . ($_SESSION['q']-1) . ' Fragen beantwortet, davon waren ' . ( $_SESSION['data'][0]+$_SESSION['data'][3] ) . ' richtig und ' . ( $_SESSION['data'][1]+$_SESSION['data'][2] ) . ' falsch.';
				$ret .= '<br />';
				$ret .= '<strong>Kappa (K) = ' . number_format( $kappa, 2, ',', '.' ) . '</strong>';

				/** write results to DB */
				$wpdb->insert(
					$wpdb->prefix . LEITFADENTIERWOHL_TABLE_RESULTS,
					array(
						'user_id' => get_current_user_id(),
						'quiz' => strval( $values['quiz'] ),
						'kappa' => $kappa,
						'answers' => json_encode( $_SESSION['t'], JSON_PRETTY_PRINT ),
						'crdate' => time()
					)
				);

				/** reset */
				self::init_session( $values['quiz'] );
			} else {
				$src = $_SESSION['records']['media'][$_SESSION['q']-1]['src'];

				$ret .= '<h3>' . $_SESSION['records']['question'] . '</h3>';

				if ( $_SESSION['records']['media'][$_SESSION['q']-1]['desc'] ) {
					$ret .= '<strong>Hinweis:</strong> ' . $_SESSION['records']['media'][$_SESSION['q']-1]['desc'] .
					        '<br /><br />';
				}

				if ( strpos( strtolower( $src ), 'youtube' ) > 0 ) {
					$ret .= '<iframe width="560" height="315" src="' . $src . '" frameborder="0" allowfullscreen></iframe>';
				} else {
					//$ret .= '<img src="' . LEITFADENTIERWOHL_ROOT_URL . $src . '" />';
					$ret .= '<img src="/wp-content/plugins/leitfaden-tierwohl/' . $src . '" style="width: 100%;" />';
				}

				$ret .= '<br />' .
				        '<div style="text-align: right;">' . $_SESSION['q'] . ' / ' . count( $_SESSION['records']['media'] ) . '</div>' .
				        '<form method="POST" action="' . $post->post_name . '">';

				if ( $_SESSION['s'] === self::SAVE ) {
					$ret .= '
					<input type="radio" id="lftw_yes" name="lftw_answer" value="1" required="required" /> <label for="lftw_yes">Ja</label>
					<br />
					<input type="radio" id="lftw_no" name="lftw_answer" value="0" required="required" /> <label for="lftw_no">Nein</label>
					<br /><br />';
				} else {
					$ret .= 'Deine Antwort: ' . constant( 'Schenkenfelder\LeitfadenTierwohl\Shortcodes::ANSWER_' . $_POST['lftw_answer'] ) . ', richtige Antwort: ' . constant( 'Schenkenfelder\LeitfadenTierwohl\Shortcodes::ANSWER_' . $_SESSION['a'] ) . '.';
					$ret .= '<br />';
					$ret .= '<strong>Lösung:</strong> ' . $_SESSION['records']['media'][$_SESSION['q']-1]['err'];
					$ret .= '<br /><br />';
				}

				$ret .= '
					<input type="hidden" name="lftw" value="' . $_SESSION['r'] . '" />
					<button type="submit">' . $_SESSION['s'] . '</button>
				</form>
			';
			}
		}

		return $ret;
	}

	public static function init_session( $quiz ) {
		/** DB records */
		$_SESSION['records'] = Db::getRecords( $quiz );
		shuffle( $_SESSION['records']['media'] );
		/* matrix */
		$_SESSION['data'] = [ 0 , 0, 0 , 0];
		/** question number */
		$_SESSION['q'] = 1;
		/** correct answer */
		$_SESSION['a'] = $_SESSION['records']['media'][$_SESSION['q']-1]['val'];
		/** quiz number */
		$_SESSION['quiz'] = $quiz;
		/** random number for security purposes */
		$_SESSION['r'] = rand( 100000, 999999 );
		/** step */
		$_SESSION['s'] = self::SAVE;
		/** table of answers */
		$_SESSION['t'] = [];
	}

}