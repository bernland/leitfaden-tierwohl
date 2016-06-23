<?php

namespace Schenkenfelder\LeitfadenTierwohl;

class Shortcodes {

	const SAVE = 'Antworten';
	const NEXT = 'Weiter';
	const QUES = 'Speichern';
	const ANSWER_0 = 'Nein';
	const ANSWER_1 = 'Ja';

	public static function leitfaden_tierwohl( $attributes ) {
		global $post;
		global $wpdb;

		$ret = '';

		if ( get_current_user_id() === 0 ) {
			$ret .= '<a href="/wp-login.php?redirect_to=%2F' . $post->post_name . '">Bitte melden Sie sich an, um am Quiz teilnehmen zu können.</a>';
		} else {
			$values = shortcode_atts( array(
				'quiz' => 1
			), $attributes );

			/**
			 * INIT FIRST SESSION
			 */
			if ( ! ( isset( $_SESSION['r'] ) ) ) {
				self::init_session_0();
			}

			if ( isset( $_POST['lftw'] ) && (int) $_POST['lftw'] === $_SESSION['r'] && $_SESSION['s'] === self::QUES ) {
				/** write results to DB */
				$wpdb->insert(
					$wpdb->prefix . LEITFADENTIERWOHL_TABLE_USERBG,
					array(
						'user_id'       => get_current_user_id(),
						
						'gender'        => strval( $_POST['lftw_gender'] ),
						'age'           => strval( $_POST['lftw_age'] ),
						'role'          => strval( $_POST['lftw_role'] ),
						'education1'    => strval( $_POST['lftw_education1'] ),
						'education2'    => strval( $_POST['lftw_education2'] ),

						'location'      => strval( $_POST['lftw_location'] ),
						'organic'       => strval( $_POST['lftw_organic'] ),
						'type'         => strval( $_POST['lftw_type'] ),
						'count_dairy'   => strval( $_POST['lftw_count_dairy'] ),
						'count_suckler' => strval( $_POST['lftw_count_suckler'] ),
						'count_beef'    => strval( $_POST['lftw_count_beef'] ),
						'count_hiefer'  => strval( $_POST['lftw_count_hiefer'] ),
						'count_calf'    => strval( $_POST['lftw_count_calf'] ),

						'tiknown'       => strval( $_POST['lftw_tiknown'] ),
						'tiknownfrom'   => json_encode( $_POST['lftw_tiknownfrom'], JSON_PRETTY_PRINT ),
						'tiknown_text'  => strval( $_POST['lftw_tiknown_text'] ),
						'timeaning'     => strval( $_POST['lftw_timeaning'] ),
						'suitability'   => strval( $_POST['lftw_suitability'] ),

						'crdate'  => time()
					)
				);
				$_SESSION['r'] = rand( 100000, 999999 );
				$_SESSION['s'] = self::SAVE;
				$_SESSION['u'] = $wpdb->get_row(
					'SELECT * FROM ' . $wpdb->prefix . LEITFADENTIERWOHL_TABLE_USERBG . ' WHERE user_id = ' . get_current_user_id(),
					OBJECT,
					0
				);
			}

			if ( $_SESSION['u'] === null ) {
				$ret .= '<h3 class="lftw_question">Bitte füllen Sie zuerst den Fragebogen aus, danach werden Sie automatisch zum Quiz weitergeleitet!</h3>';
				$ret .= '<form id="lftw_form_userbg" method="POST" action="/' . $post->post_name . '#lftw">';

				$ret .= '<fieldset>
                         <legend class="lftw_form_legend">Persönliche Daten</legend>';
				$ret .= '<strong class="lftw_form_header">Geschlecht</strong>';
				$ret .= '<input type="radio" id="lftw_male" name="lftw_gender" value="männlich" required="required" /> <label for="lftw_male">männlich</label>';
				$ret .= '<br />';
				$ret .= '<input type="radio" id="lftw_female" name="lftw_gender" value="weiblich" required="required" /> <label for="lftw_female">weiblich</label>';
				$ret .= '<br /><br />';
				$ret .= '<strong class="lftw_form_header">Alter</strong>';
				$ret .= '<select name="lftw_age" required="required">';
				$ret .= '<option value="">Bitte auswählen</option>';
				$ret .= '<option value="10">< 20</option>';
				$ret .= '<option value="20">20 - 29</option>';
				$ret .= '<option value="30">30 - 39</option>';
				$ret .= '<option value="40">40 - 49</option>';
				$ret .= '<option value="50">50 - 59</option>';
				$ret .= '<option value="60">60+</option>';
				$ret .= '</select>';
				$ret .= '<br /><br />';
				$ret .= '<strong class="lftw_form_header">Ich bin</strong>';
				$ret .= '<input type="radio" id="lftw_role_1" name="lftw_role" value="" required="required" /> <label for="lftw_role_1">BetriebsführerIn (seit <input class="lftw_since" id="lftw_role_since" type="number" min="1" size="2" /> Jahren)</label>';
				$ret .= '<br />';
				$ret .= '<input type="radio" id="lftw_role_2" name="lftw_role" value="Familienarbeitskraft" required="required" /> <label for="lftw_role_2">Familienarbeitskraft</label>';
				$ret .= '<br />';
				$ret .= '<input type="radio" id="lftw_role_3" name="lftw_role" value="nicht aktiv in der Landwirtschaft tätig" required="required" /> <label for="lftw_role_3">nicht aktiv in der Landwirtschaft tätig</label>';
				$ret .= '<br />';
				$ret .= '<input type="radio" id="lftw_role_4" name="lftw_role" value="" required="required" /> <label for="lftw_role_4">sonstiges <span class="lftw_other_radio">(bitte anführen: <input class="lftw_other" id="lftw_role_other" type="text" />)</span></label>';
				$ret .= '<br /><br />';
				$ret .= '<strong class="lftw_form_header">Fachspezifisches Ausbildungsniveau</strong>';
				$ret .= '<input type="radio" id="lftw_education1_1" name="lftw_education1" value="lw. FacharbeiterIn" required="required" /> <label for="lftw_education1_1">lw. FacharbeiterIn</label>';
				$ret .= '<br />';
				$ret .= '<input type="radio" id="lftw_education1_2" name="lftw_education1" value="lw. MeisterIn" required="required" /> <label for="lftw_education1_2">lw. MeisterIn</label>';
				$ret .= '<br />';
				$ret .= '<input type="radio" id="lftw_education1_3" name="lftw_education1" value="keine landwirtschaftliche Ausbildung" required="required" /> <label for="lftw_education1_3">keine landwirtschaftliche Ausbildung</label>';
				$ret .= '<br />';
				$ret .= '<input type="radio" id="lftw_education1_4" name="lftw_education1" value="" required="required" /> <label for="lftw_education1_4">sonstiges <span class="lftw_other_radio">(bitte anführen: <input class="lftw_other" id="lftw_education1_other" type="text" />)</span></label>';
				$ret .= '<br /><br />';
				$ret .= '<strong class="lftw_form_header">Höchste abgeschlossene Schulstufe</strong>';
				$ret .= '<select name="lftw_education2" required="required">';
				$ret .= '<option value="">Bitte auswählen</option>';
				$ret .= '<option value="Pflichtschule">Pflichtschule</option>';
				$ret .= '<option value="Fachschule">Fachschule</option>';
				$ret .= '<option value="Matura">Matura</option>';
				$ret .= '<option value="Akademischer Abschluss">Akademischer Abschluss</option>';
				$ret .= '</select>';
				$ret .= '</fieldset>';

				$ret .= '<fieldset>
                         <legend class="lftw_form_legend">Fragen zum Betrieb</legend>';
				$ret .= '<strong class="lftw_form_header">Mein/Unser Betrieb befindet sich in</strong>';
				$ret .= '<select name="lftw_location" required="required">';
				$ret .= '<option value="">Bitte auswählen</option>';
				$ret .= '<option value="Oberösterreich">Oberösterreich</option>';
				$ret .= '<option value="Niederösterreich">Niederösterreich</option>';
				$ret .= '<option value="Wien">Wien</option>';
				$ret .= '<option value="Burgenland">Burgenland</option>';
				$ret .= '<option value="Steiermark">Steiermark</option>';
				$ret .= '<option value="Kärnten">Kärnten</option>';
				$ret .= '<option value="Salzburg">Salzburg</option>';
				$ret .= '<option value="Tirol">Tirol</option>';
				$ret .= '<option value="Vorarlberg">Vorarlberg</option>';
				$ret .= '</select>';
				$ret .= '<br /><br />';
				$ret .= '<strong class="lftw_form_header">Mein/Unser Betrieb wird biologisch geführt</strong>';
				$ret .= '<input type="radio" id="lftw_organic_yes" name="lftw_organic" value="" required="required" /> <label for="lftw_organic_yes">Ja (seit <input class="lftw_since" id="lftw_organic_since" type="number" min="1" size="2" /> Jahren)</label>';
				$ret .= '<br />';
				$ret .= '<input type="radio" id="lftw_organic_no" name="lftw_organic" value="0" required="required" /> <label for="lftw_organic_no">Nein</label>';
				$ret .= '<br /><br />';
				$ret .= '<strong class="lftw_form_header">Betriebsform (bei gemischten Betrieben Hauptbetriebszweig)</strong>';
				$ret .= '<input type="radio" id="lftw_type_1" name="lftw_type" value="Milchviehhaltung" required="required" /> <label for="lftw_type_1">Milchviehhaltung</label>';
				$ret .= '<br />';
				$ret .= '<input type="radio" id="lftw_type_2" name="lftw_type" value="Mutterkuhhaltung" required="required" /> <label for="lftw_type_2">Mutterkuhhaltung</label>';
				$ret .= '<br />';
				$ret .= '<input type="radio" id="lftw_type_3" name="lftw_type" value="Rindermast" required="required" /> <label for="lftw_type_3">Rindermast</label>';
				$ret .= '<br />';
				$ret .= '<input type="radio" id="lftw_type_4" name="lftw_type" value="keine Rinderhaltung" required="required" /> <label for="lftw_type_4">keine Rinderhaltung</label>';
				$ret .= '<div id="lftw_form_userbg_8-1">';
				$ret .= '<br />';
				$ret .= '<strong class="lftw_form_header">Durchschnittlicher Tierbestand je Tierkategorie</strong>';
				$ret .= '<input name="lftw_count_dairy" id="lftw_count_dairy" class="lftw_since" type="number" min="0" value="0" size="2" required="required" /> <label for="lftw_count_dairy">Milchkühe</label>';
				$ret .= '<br />';
				$ret .= '<input name="lftw_count_suckler" id="lftw_count_suckler" class="lftw_since" type="number" min="0" value="0" size="2" required="required" /> <label for="lftw_count_suckler">Mutterkühe</label>';
				$ret .= '<br />';
				$ret .= '<input name="lftw_count_beef" id="lftw_count_beef" class="lftw_since" type="number" min="0" value="0" size="2" required="required" /> <label for="lftw_count_beef">Mastrinder (ab 6 Monate)</label>';
				$ret .= '<br />';
				$ret .= '<input name="lftw_count_hiefer" id="lftw_count_hiefer" class="lftw_since" type="number" min="0" value="0" size="2" required="required" /> <label for="lftw_count_hiefer">weibliches Jungvieh (ab 6 Monate)</label>';
				$ret .= '<br />';
				$ret .= '<input name="lftw_count_calf" id="lftw_count_calf" class="lftw_since" type="number" min="0" value="0" size="2" required="required" /> <label for="lftw_count_calf">Kälber (bis 6 Monate)</label>';
				$ret .= '</div>';
				$ret .= '</fieldset>';

				$ret .= '<fieldset>
                         <legend class="lftw_form_legend">Tierbezogene Indikatoren</legend>';
				$ret .= '<strong class="lftw_form_header">Tierbezogene Indikatoren sind mir ein Begriff</strong>';
				$ret .= '<input type="radio" id="lftw_tiknown_yes" name="lftw_tiknown" value="Ja" required="required" /> <label for="lftw_tiknown_yes">Ja</label>';
				$ret .= '<br />';
				$ret .= '<input type="radio" id="lftw_tiknown_no" name="lftw_tiknown" value="Nein" required="required" /> <label for="lftw_tiknown_no">Nein</label>';
				$ret .= '<div id="lftw_form_userbg_9-1-2">';
				$ret .= '<br />';
				$ret .= '<strong class="lftw_form_header">Tierbezogene Indikatoren sind mir bekannt aus</strong>';
				$ret .= '<input type="checkbox" id="lftw_tiknownfrom_1" name="lftw_tiknownfrom[]" value="Leitfaden Tierwohl (BIO AUSTRIA)" /> <label for="lftw_tiknownfrom_1">Leitfaden Tierwohl (BIO AUSTRIA)</label>';
				$ret .= '<br />';
				$ret .= '<input type="checkbox" id="lftw_tiknownfrom_2" name="lftw_tiknownfrom[]" value="Aus- und Weiterbildungskursen" /> <label for="lftw_tiknownfrom_2">Aus- und Weiterbildungskursen</label>';
				$ret .= '<br />';
				$ret .= '<input type="checkbox" id="lftw_tiknownfrom_3" name="lftw_tiknownfrom[]" value="Fachzeitungen/Fachzeitschriften" /> <label for="lftw_tiknownfrom_3">Fachzeitungen/Fachzeitschriften</label>';
				$ret .= '<br />';
				$ret .= '<input type="checkbox" id="lftw_tiknownfrom_4" name="lftw_tiknownfrom[]" value="" /> <label for="lftw_tiknownfrom_4">sonstiges <span class="lftw_other_radio">(bitte anführen: <input class="lftw_other" id="lftw_tiknownfrom_other" type="text" />)</span></label>';
				$ret .= '<br /><br />';
				$ret .= '<strong class="lftw_form_header">Welche tierbezogenen Indikatoren kennen Sie?</strong>';
				$ret .= '<textarea name="lftw_tiknown_text"></textarea>';
				$ret .= '</div>';
				$ret .= '<br /><br />';
				$ret .= '<strong class="lftw_form_header">Tierbezogene Indikatoren sind zur Beurteilung des Tierwohls</strong>';
				$ret .= '<input type="radio" id="lftw_timeaning_1" name="lftw_timeaning" value="sehr aussagekräftig" required="required" /> <label for="lftw_timeaning_1">sehr aussagekräftig</label>';
				$ret .= '<br />';
				$ret .= '<input type="radio" id="lftw_timeaning_2" name="lftw_timeaning" value="mäßig aussagekräftig" required="required" /> <label for="lftw_timeaning_2">mäßig aussagekräftig</label>';
				$ret .= '<br />';
				$ret .= '<input type="radio" id="lftw_timeaning_3" name="lftw_timeaning" value="wenig aussagekräftig" required="required" /> <label for="lftw_timeaning_3">wenig aussagekräftig</label>';
				$ret .= '<br />';
				$ret .= '<input type="radio" id="lftw_timeaning_4" name="lftw_timeaning" value="nicht aussagekräftig" required="required" /> <label for="lftw_timeaning_4">nicht aussagekräftig</label>';
				$ret .= '<br />';
				$ret .= '<input type="radio" id="lftw_timeaning_5" name="lftw_timeaning" value="kann ich nicht beurteilen" required="required" /> <label for="lftw_timeaning_5">kann ich nicht beurteilen</label>';
				$ret .= '<br /><br />';
				$ret .= '<strong class="lftw_form_header">Tierbezogene Indikatoren sind zur Beurteilung des Tierwohls</strong>';
				$ret .= '<input type="radio" id="lftw_suitability_1" name="lftw_suitability" value="besser" required="required" /> <label for="lftw_suitability_1">besser</label>';
				$ret .= '<br />';
				$ret .= '<input type="radio" id="lftw_suitability_2" name="lftw_suitability" value="gleich gut" required="required" /> <label for="lftw_suitability_2">gleich gut</label>';
				$ret .= '<br />';
				$ret .= '<input type="radio" id="lftw_suitability_3" name="lftw_suitability" value="schlechter" required="required" /> <label for="lftw_suitability_3">schlechter</label>';
				$ret .= '<strong class="lftw_form_header">geeignet als/wie ressourcenbezogene Indikatoren (Liegefläche, Auslauffläche, Luftqualität, Tageslicht, Lärmpegel, etc.).</strong>';

				$ret .= '</fieldset>';

				$ret .= '<input type="hidden" name="lftw_userbg" value="true" />';
				$ret .= '<input type="hidden" name="lftw" value="' . $_SESSION['r'] . '" />';
				$ret .= '<button class="lftw_submit" type="submit">' . $_SESSION['s'] . '</button>';
				$ret .= '</form>';
			} else {

				/**
				 * I N I T   S E S S I O N
				 */
				if ( ( ! ( isset( $_SESSION['quiz'] ) ) || $_SESSION['quiz'] !== $values['quiz'] ) || ! isset( $_SESSION['records'] ) || ! isset( $_SESSION['data'] ) || ! isset( $_SESSION['q'] ) || ! isset( $_SESSION['a'] ) ) {
					self::init_session( $values['quiz'] );
				}

				if ( isset( $_POST['lftw'] ) && (int) $_POST['lftw'] === $_SESSION['r'] && isset( $_POST['lftw_answer'] ) && $_SESSION['s'] === self::SAVE ) {
					$answer = (int) $_POST['lftw_answer'];
					if ( $answer === $_SESSION['a'] ) {
						if ( $answer === 0 ) {
							$_SESSION['data'][0] ++;
						} else {
							$_SESSION['data'][3] ++;
						}
						$_SESSION['t'][substr( strrchr( $_SESSION['records']['media'][ $_SESSION['q'] - 1 ]['src'], '/' ), 1)] = 1;
					} else {
						if ( $_SESSION['a'] === 1 && $answer === 0 ) {
							$_SESSION['data'][1] ++;
						} else {
							$_SESSION['data'][2] ++;
						}
						$_SESSION['t'][substr( strrchr( $_SESSION['records']['media'][ $_SESSION['q'] - 1 ]['src'], '/' ), 1)] = 0;
					}

					$_SESSION['s'] = self::NEXT;
				} else if ( $_SESSION['s'] === self::NEXT ) {
					$_SESSION['q'] ++;
					$_SESSION['r'] = rand( 100000, 999999 );
					if ( $_SESSION['q'] <= count( $_SESSION['records']['media'] ) ) {
						$_SESSION['a'] = $_SESSION['records']['media'][ $_SESSION['q'] - 1 ]['val'];
					}
					$_SESSION['s'] = self::SAVE;
				}

				if ( $_SESSION['q'] === count( $_SESSION['records']['media'] ) + 1 ) {
					// end of quiz
					$a   = $_SESSION['data'][0];
					$b   = $_SESSION['data'][1];
					$c   = $_SESSION['data'][2];
					$d   = $_SESSION['data'][3];
					$n_1 = $a + $c;
					$n_0 = $b + $d;
					$m_1 = $a + $b;
					$m_0 = $c + $d;
					$n   = $a + $b + $c + $d;

					$p_0 = ( $a + $d ) / $n;
					$p_e = ( ( $n_1 / $n ) * ( $m_1 / $n ) ) + ( ( $n_0 / $n ) * ( $m_0 / $n ) );

					// division by zero
					if ( 1 - $p_e !== 0 ) {
						$kappa = ( $p_0 - $p_e ) / ( 1 - $p_e );
					} else {
						$kappa = 0;
					}

					$ret = 'Sie haben ' . ( $_SESSION['q'] - 1 ) . ' Fragen beantwortet, davon waren ' . ( $_SESSION['data'][0] + $_SESSION['data'][3] ) . ' richtig und ' . ( $_SESSION['data'][1] + $_SESSION['data'][2] ) . ' falsch.';
					$ret .= '<br />';
					$ret .= '<strong>Kappa (K) = ' . number_format( $kappa, 2, ',', '.' ) . '</strong>';
					$ret .= '<br />';
					$ret .= '<br />';
					$ret .= '<a href="/beurteilungskriterien/">Beurteilungskriterien</a>';
					$ret .= '<br />';
					$ret .= '<a href="/uebungszentrum/">Übungszentrum</a>';

					/** write results to DB */
					$wpdb->insert(
						$wpdb->prefix . LEITFADENTIERWOHL_TABLE_RESULTS,
						array(
							'user_id' => get_current_user_id(),
							'quiz'    => strval( $values['quiz'] ),
							'kappa'   => $kappa,
							'answers' => json_encode( $_SESSION['t'], JSON_PRETTY_PRINT ),
							'crdate'  => time()
						)
					);

					/** reset */
					self::init_session( $values['quiz'] );
				} else {
					$src = $_SESSION['records']['media'][ $_SESSION['q'] - 1 ]['src'];

					$ret .= '<h3 class="lftw_question" id="lftw">' . $_SESSION['records']['question'] . '</h3>';

					if ( $_SESSION['records']['media'][ $_SESSION['q'] - 1 ]['desc'] ) {
						$ret .= '<strong>Hinweis:</strong> ' . $_SESSION['records']['media'][ $_SESSION['q'] - 1 ]['desc'] .
						        '<br /><br />';
					}

					$ret .= '<div class="lftw_left">';

					if ( strpos( strtolower( $src ), 'youtube' ) > 0 ) {
						$ret .= '<iframe class="lftw_iframe" src="' . $src . '" frameborder="0" allowfullscreen></iframe>';
					} else {
						$ret .= '<img src="' . LEITFADENTIERWOHL_ROOT_URL . $src . '" class="lftw_image" />';
						//$ret .= '<img src="/wp-content/plugins/leitfaden-tierwohl/' . $src . '"  />';
					}

					$ret .= '<br />' .
					        '<div class="lftw_pagination">' . $_SESSION['q'] . ' / ' . count( $_SESSION['records']['media'] ) . '</div>' .
					        '</div><div class="lftw_right">' .
					        '<form method="POST" action="/' . $post->post_name . '#lftw">';

					if ( $_SESSION['s'] === self::SAVE ) {
						$ret .= '
					<input type="radio" id="lftw_yes" name="lftw_answer" value="1" required="required" /> <label for="lftw_yes">Ja</label>
					<br />
					<input type="radio" id="lftw_no" name="lftw_answer" value="0" required="required" /> <label for="lftw_no">Nein</label>
					<br />';
					} else {
						$ret .= ' ';

						if ( (int) $_POST['lftw_answer'] === $_SESSION['a'] ) {
							if ( $_SESSION['a'] === 1 ) {
								$ret .= '
								<img src="' . LEITFADENTIERWOHL_ROOT_URL . 'img/1.png" class="lftw_result" /> <label class="lftw_border"><strong>Ja</strong></label>
								<br />
								<img src="' . LEITFADENTIERWOHL_ROOT_URL . 'img/0.png" class="lftw_result lftw_hidden" /> <label class="lftw_hidden">Nein</label>
							';
							} else {
								$ret .= '
								<img src="' . LEITFADENTIERWOHL_ROOT_URL . 'img/0.png" class="lftw_result lftw_hidden" /> <label class="lftw_hidden">Ja</label>
								<br />
								<img src="' . LEITFADENTIERWOHL_ROOT_URL . 'img/1.png" class="lftw_result" /> <label class="lftw_border"><strong>Nein</strong></label>
							';
							}
						} else {
							if ( $_SESSION['a'] === 1 ) {
								$ret .= '
								<img src="' . LEITFADENTIERWOHL_ROOT_URL . 'img/1.png" class="lftw_result" /> <label>Ja</label>
								<br />
								<img src="' . LEITFADENTIERWOHL_ROOT_URL . 'img/0.png" class="lftw_result lftw_hidden" /> <label class="lftw_border lftw_hidden"><strong>Nein</strong></label>
							';
							} else {
								$ret .= '
								<img src="' . LEITFADENTIERWOHL_ROOT_URL . 'img/0.png" class="lftw_result lftw_hidden" /> <label class="lftw_border lftw_hidden"><strong>Ja</strong></label>
								<br />
								<img src="' . LEITFADENTIERWOHL_ROOT_URL . 'img/1.png" class="lftw_result" /> <label>Nein</label>
							';
							}
						}

						$ret .= '<br />';

					}

					$ret .= '
					<input type="hidden" name="lftw" value="' . $_SESSION['r'] . '" />
					<button class="lftw_submit" type="submit">' . $_SESSION['s'] . '</button>
				</form>
				';

					if ( $_SESSION['s'] === self::NEXT ) {
						$ret .= '<div class="lftw_solution"><strong>Lösung:</strong> ' . $_SESSION['records']['media'][ $_SESSION['q'] - 1 ]['err'] . '</div>';
					}

					$ret .= '</div>';
				}
			}
		}

		return $ret;
	}

	public static function init_session_0() {
		global $wpdb;

		/** random number for security purposes */
		$_SESSION['r'] = rand( 100000, 999999 );
		/** step */
		$_SESSION['s'] = self::QUES;
		/** user's background */
		$_SESSION['u'] = $wpdb->get_row(
			'SELECT * FROM ' . $wpdb->prefix . LEITFADENTIERWOHL_TABLE_USERBG . ' WHERE user_id = ' . get_current_user_id(),
			OBJECT,
			0
		);
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
		/** table of answers */
		$_SESSION['t'] = [];
		/** step */
		$_SESSION['s'] = self::SAVE;
	}

}