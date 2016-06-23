<?php

namespace Schenkenfelder\LeitfadenTierwohl;

class Db {

	public static function getRecords( $quiz ) {
		$records = [
			'1' => [
				'chapter'  => 'Ernährungszustand',
				'question' => 'Weist das abgebildete Tier einen normalen Ernährungszustand auf?',
				'media'   => [
					[ 'src' => 'img/01_Ernährungszustand/BCS_A_01.JPG', 'val' => 0, 'desc' => '', 'err' => 'Quer- und Dornfortsätze treten deutlich hervor und sind einzeln erkennbar. Hüft- und Sitzbeinhöcker sehr prominent, keine Fettauflage erkennbar. Rippen einzeln erkennbar.' ],
                    [ 'src' => 'img/01_Ernährungszustand/BCS_A_02.JPG', 'val' => 0, 'desc' => '', 'err' => 'Quer- und Dornfortsätze treten deutlich hervor und sind einzeln erkennbar. Hüft- und Sitzbeinhöcker sehr prominent, keine Fettauflage erkennbar. Deutliche Vertiefung der Linie zwischen Wirbelsäule und Hüftbeinhöcker. Rippen einzeln erkennbar.' ],
                    [ 'src' => 'img/01_Ernährungszustand/BCS_A_03.JPG', 'val' => 0, 'desc' => '', 'err' => 'Quer- und Dornfortsätze treten deutlich hervor und sind einzeln erkennbar. Hüft- und Sitzbeinhöcker sehr prominent, keine Fettauflage erkennbar. Einbuchtung der Linie zwischen Wirbelsäule und Hüftbeinhöcker.' ],
                    [ 'src' => 'img/01_Ernährungszustand/BCS_A_04.JPG', 'val' => 0, 'desc' => '', 'err' => 'Quer- und Dornfortsätze treten deutlich hervor und sind einzeln erkennbar. Hüft- und Sitzbeinhöcker sehr prominent, keine Fettauflage erkennbar. Deutliche Vertiefung der Linie zwischen Wirbelsäule und Hüftbeinhöcker. Rippen einzeln erkennbar. Schwanzknochen heben sich deutlich ab, Schwanzgrube stark eingefallen.' ],
                    [ 'src' => 'img/01_Ernährungszustand/BCS_A_05.JPG', 'val' => 0, 'desc' => '', 'err' => 'Quer- und Dornfortsätze treten deutlich hervor und sind einzeln erkennbar. Hüft- und Sitzbeinhöcker sehr prominent, keine Fettauflage erkennbar. Rippen einzeln erkennbar. Deutliche Vertiefung der Linie zwischen Wirbelsäule und Hüftbeinhöcker. Schwanzknochen heben sich deutlich ab, Schwanzgrube stark eingefallen.' ],
                    [ 'src' => 'img/01_Ernährungszustand/BCS_A_06.JPG', 'val' => 0, 'desc' => '', 'err' => 'Quer- und Dornfortsätze treten deutlich hervor und sind einzeln erkennbar. Hüft- und Sitzbeinhöcker sehr prominent, keine Fettauflage erkennbar. Rippen einzeln erkennbar. Deutliche Vertiefung der Linie zwischen Wirbelsäule und Hüftbeinhöcker. Schwanzknochen heben sich deutlich ab, Schwanzgrube stark eingefallen.' ],
                    [ 'src' => 'img/01_Ernährungszustand/BCS_A_07.JPG', 'val' => 0, 'desc' => '', 'err' => 'Quer- und Dornfortsätze treten deutlich hervor und sind einzeln erkennbar. Hüft- und Sitzbeinhöcker sehr prominent, keine Fettauflage erkennbar. Einbuchtung der Linie zwischen Wirbelsäule und Hüftbeinhöcker. Schwanzknochen heben sich deutlich ab, Schwanzgrube stark eingefallen.' ],
                    [ 'src' => 'img/01_Ernährungszustand/BCS_A_08.JPG', 'val' => 0, 'desc' => '', 'err' => 'Quer- und Dornfortsätze treten deutlich hervor und sind einzeln erkennbar. Hüft- und Sitzbeinhöcker sehr prominent, keine Fettauflage erkennbar. Rippen einzeln erkennbar. Deutliche Vertiefung der Linie zwischen Wirbelsäule und Hüftbeinhöcker. Schwanzknochen heben sich deutlich ab, Schwanzgrube stark eingefallen.' ],
                    [ 'src' => 'img/01_Ernährungszustand/BCS_N_01.JPG', 'val' => 1, 'desc' => '', 'err' => 'Quer- und Dornfortsätze sowie Hüftbeinhöcker sind gut abgedeckt. Gerade Linie zwischen Wirbelsäule und Hüftbeinhöcker. Schwanzansatz zeichnet sich durch eine leichte Kuppe ab.' ],
					[ 'src' => 'img/01_Ernährungszustand/BCS_N_02.JPG', 'val' => 1, 'desc' => '', 'err' => 'Quer- und Dornfortsätze sowie Hüftbeinhöcker sind gut abgedeckt. Gerade Linie zwischen Wirbelsäule und Hüftbeinhöcker. Schwanzansatz zeichnet sich durch eine leichte Kuppe ab.' ],
                    [ 'src' => 'img/01_Ernährungszustand/BCS_N_03.JPG', 'val' => 1, 'desc' => '', 'err' => 'Quer- und Dornfortsätze sowie Hüftbeinhöcker sind gut abgedeckt. Schwanzgrube normal, gerade Linie zwischen Wirbelsäule und Hüftbeinhöcker.' ],
                    [ 'src' => 'img/01_Ernährungszustand/BCS_N_04.JPG', 'val' => 1, 'desc' => '', 'err' => 'Quer- und Dornfortsätze sowie Hüftbeinhöcker sind ausreichend abgedeckt. Nur leichte Einbuchtung der Linie zwischen Wirbelsäule und Hüftbeinhöcker.' ],
                    [ 'src' => 'img/01_Ernährungszustand/BCS_N_05.JPG', 'val' => 1, 'desc' => '', 'err' => 'Querfortsätze sowie Hüftbeinhöcker sind gut abgedeckt. Verbindungslinie zwischen Hüftbeinhöcker und Rückgrat leicht konkav. Schwanzansatz zeichnet sich durch eine leichte Kuppe ab.' ],
                    [ 'src' => 'img/01_Ernährungszustand/BCS_N_06.JPG', 'val' => 1, 'desc' => '', 'err' => 'Quer- und Dornfortsätze sowie Hüftbeinhöcker sind gut abgedeckt. Gerade Linie zwischen Wirbelsäule und Hüftbeinhöcker. Schwanzansatz zeichnet sich durch eine leichte Kuppe ab.' ],
                    [ 'src' => 'img/01_Ernährungszustand/BCS_N_07.JPG', 'val' => 1, 'desc' => '', 'err' => 'Quer- und Dornfortsätze sowie Hüftbeinhöcker sind gut abgedeckt. Schwanzgrube fast ausgefüllt. Gerade Linie zwischen Wirbelsäule und Hüftbeinhöcker.' ],
                    [ 'src' => 'img/01_Ernährungszustand/BCS_N_08.JPG', 'val' => 1, 'desc' => '', 'err' => 'Quer- und Dornfortsätze sowie Hüftbeinhöcker sind ausreichend abgedeckt. Schwanzgrube normal. Nur leichte Einbuchtung der Linie zwischen Wirbelsäule und Hüftbeinhöcker.' ],
                    [ 'src' => 'img/01_Ernährungszustand/BCS_N_09.JPG', 'val' => 1, 'desc' => '', 'err' => 'Quer- und Dornfortsätze sowie Hüftbeinhöcker sind ausreichend abgedeckt. Schwanzgrube normal. Nur leichte Einbuchtung der Linie zwischen Wirbelsäule und Hüftbeinhöcker.' ],
                    [ 'src' => 'img/01_Ernährungszustand/BCS_N_10.JPG', 'val' => 1, 'desc' => '', 'err' => 'Quer- und Dornfortsätze sowie Hüftbeinhöcker sind ausreichend abgedeckt. Schwanzgrube normal. Nur leichte Einbuchtung der Linie zwischen Wirbelsäule und Hüftbeinhöcker.' ],
                    [ 'src' => 'img/01_Ernährungszustand/BCS_N_11.JPG', 'val' => 1, 'desc' => '', 'err' => 'Quer- und Dornfortsätze sowie Hüftbeinhöcker sind gut abgedeckt. Gerade Linie zwischen Wirbelsäule und Hüftbeinhöcker. Schwanzansatz zeichnet sich durch eine leichte Kuppe ab.' ],
                    [ 'src' => 'img/01_Ernährungszustand/BCS_N_12.JPG', 'val' => 1, 'desc' => '', 'err' => 'Quer- und Dornfortsätze sowie Hüftbeinhöcker sind gut abgedeckt. Gerade Linie zwischen Wirbelsäule und Hüftbeinhöcker. Schwanzansatz zeichnet sich durch eine leichte Kuppe ab.' ],
                    [ 'src' => 'img/01_Ernährungszustand/BCS_N_13.JPG', 'val' => 1, 'desc' => '', 'err' => 'Quer- und Dornfortsätze sowie Hüftbeinhöcker sind gut abgedeckt. Schwanzgrube fast ausgefüllt. Gerade Linie zwischen Wirbelsäule und Hüftbeinhöcker.' ],
                    [ 'src' => 'img/01_Ernährungszustand/BCS_N_14.JPG', 'val' => 1, 'desc' => '', 'err' => 'Quer- und Dornfortsätze sowie Hüftbeinhöcker sind ausreichend abgedeckt. Schwanzgrube normal. Nur leichte Einbuchtung der Linie zwischen Wirbelsäule und Hüftbeinhöcker.' ],
                    [ 'src' => 'img/01_Ernährungszustand/BCS_N_15.JPG', 'val' => 1, 'desc' => '', 'err' => 'Quer- und Dornfortsätze sowie Hüftbeinhöcker sind ausreichend abgedeckt. Schwanzgrube normal. Nur leichte Einbuchtung der Linie zwischen Wirbelsäule und Hüftbeinhöcker.' ],
                    [ 'src' => 'img/01_Ernährungszustand/BCS_V_01.JPG', 'val' => 0, 'desc' => '', 'err' => 'Dornfortsätze nicht mehr sichtbar. Hüftbeinhöcker und Schwanzansatz heben sich kaum ab. Gerade Linie zwischen Hüftbeinhöcker und Wirbelsäule. Schwanzgrube ausgefüllt.' ],
                    [ 'src' => 'img/01_Ernährungszustand/BCS_V_02.JPG', 'val' => 0, 'desc' => '', 'err' => 'Hüftbeinhöcker und Schwanzansatz heben sich kaum ab. Gerade Linie zwischen Hüftbeinhöcker und Wirbelsäule. Schwanzgrube ausgefüllt.' ],
                    [ 'src' => 'img/01_Ernährungszustand/BCS_V_03.JPG', 'val' => 0, 'desc' => '', 'err' => 'Dornfortsätze nicht mehr sichtbar. Hüftbeinhöcker und Schwanzansatz heben sich kaum ab. Gerade Linie zwischen Hüftbeinhöcker und Wirbelsäule. Schwanzgrube ausgefüllt. Beginnende Faltenbildung am Schwanzansatz.' ],
                    [ 'src' => 'img/01_Ernährungszustand/BCS_V_04.JPG', 'val' => 0, 'desc' => '', 'err' => 'Schwanzansatz hebt sich kaum ab. Schwanzgrube ausgefüllt.' ],
                    [ 'src' => 'img/01_Ernährungszustand/BCS_V_05.JPG', 'val' => 0, 'desc' => '', 'err' => 'Dornfortsätze nicht mehr sichtbar. Hüftbeinhöcker und Schwanzansatz heben sich kaum ab. Gerade Linie zwischen Hüftbeinhöcker und Wirbelsäule. Schwanzgrube ausgefüllt. Faltenbildung am Schwanzansatz.' ],
                    [ 'src' => 'img/01_Ernährungszustand/BCS_V_06.JPG', 'val' => 0, 'desc' => '', 'err' => 'Hüftbeinhöcker und Schwanzansatz heben sich kaum ab. Gerade Linie zwischen Hüftbeinhöcker und Wirbelsäule. Schwanzgrube fast ausgefüllt.' ],
                    [ 'src' => 'img/01_Ernährungszustand/BCS_V_07.JPG', 'val' => 0, 'desc' => '', 'err' => 'Dornfortsätze nicht mehr sichtbar. Hüftbeinhöcker und Schwanzansatz heben sich kaum ab. Gerade Linie zwischen Hüftbeinhöcker und Wirbelsäule. Schwanzgrube ausgefüllt. Beginnende Faltenbildung am Schwanzansatz.' ],
                    [ 'src' => 'img/01_Ernährungszustand/BCS_V_08.JPG', 'val' => 0, 'desc' => '', 'err' => 'Dornfortsätze nicht mehr sichtbar. Hüftbeinhöcker und Schwanzansatz heben sich kaum ab. Gerade Linie zwischen Hüftbeinhöcker und Wirbelsäule.' ],
				]
			],
			'2' => [
				'chapter'  => 'Verschmutzung',
				'question' => 'Weist das abgebildete Tier eine starke Verschmutzung auf?',
				'media'   => [
					[ 'src' => 'img/02_Verschmutzung/VS_01.JPG', 'val' => 1, 'desc' => '', 'err' => 'Tier zeigt stark verschmutzten Bereich am Euter von mehr als einer Unterarmlänge (etwa 30 cm).'  ],
                    [ 'src' => 'img/02_Verschmutzung/VS_02.JPG', 'val' => 1, 'desc' => '', 'err' => 'Tier zeigt stark verschmutzte Bereiche an Flanke und Hinterhand von mehr als einer Unterarmlänge (etwa 30 cm).'  ],
                    [ 'src' => 'img/02_Verschmutzung/VS_03.JPG', 'val' => 1, 'desc' => '', 'err' => 'Tier zeigt stark verschmutzten Bereich an der Hinterhand (speziell im Bereich des Hüftbeinhöckers) von mehr als einer Unterarmlänge (etwa 30 cm).'  ],
                    [ 'src' => 'img/02_Verschmutzung/VS_04.JPG', 'val' => 1, 'desc' => '', 'err' => 'Tier zeigt stark verschmutzten Bereich an der Hinterhand von mehr als einer Unterarmlänge (etwa 30 cm).'  ],
                    [ 'src' => 'img/02_Verschmutzung/VS_05.JPG', 'val' => 1, 'desc' => '', 'err' => 'Tier zeigt stark verschmutzten Bereich an gesamter Körperseite.'  ],
                    [ 'src' => 'img/02_Verschmutzung/VS_06.JPG', 'val' => 1, 'desc' => 'Beurteilen Sie das Tiere im Vordergrund.', 'err' => 'Tier zeigt stark verschmutzten Bereich an der Hinterhand von mehr als einer Unterarmlänge (etwa 30 cm).'  ],
                    [ 'src' => 'img/02_Verschmutzung/VS_07.JPG', 'val' => 1, 'desc' => '', 'err' => 'Tier zeigt stark verschmutzte Bereiche an Hinterhand und Euter von mehr als einer Unterarmlänge (etwa 30 cm).'  ],
                    [ 'src' => 'img/02_Verschmutzung/VS_08.JPG', 'val' => 1, 'desc' => '', 'err' => 'Tier zeigt stark verschmutzte Bereiche an Flanke und Hinterhand von mehr als einer Unterarmlänge (etwa 30 cm).'  ],
                    [ 'src' => 'img/02_Verschmutzung/VS_09.JPG', 'val' => 1, 'desc' => '', 'err' => 'Tier zeigt stark verschmutzten Bereich an der Hinterhand von mehr als einer Unterarmlänge (etwa 30 cm).'  ],
                    [ 'src' => 'img/02_Verschmutzung/VS_10.JPG', 'val' => 1, 'desc' => '', 'err' => 'Tier zeigt stark verschmutzten Bereiche an der Hinterhand von mehr als einer Unterarmlänge (etwa 30 cm).'  ],
                    [ 'src' => 'img/02_Verschmutzung/VS_OK_01.JPG', 'val' => 0, 'desc' => '', 'err' => 'Verfärbungen des Fells im Bereich Schulter, Rippen und Hinterhand, jedoch keine Verkrustungen.'  ],
                    [ 'src' => 'img/02_Verschmutzung/VS_OK_02.JPG', 'val' => 0, 'desc' => 'Beurteilen Sie das liegende Tier im Vordergrund.', 'err' => 'Keine Verschmutzung.'  ],
                    [ 'src' => 'img/02_Verschmutzung/VS_OK_03.JPG', 'val' => 0, 'desc' => '', 'err' => 'Keine Verschmutzung.'  ],
                    [ 'src' => 'img/02_Verschmutzung/VS_OK_04.JPG', 'val' => 0, 'desc' => '', 'err' => 'Leichte Verschmutzung von Schulter bis Hinterhand bzw. bauchseitig, Verkrustungen jedoch nur in kleinen Bereichen (hinter Schulter).'  ],
                    [ 'src' => 'img/02_Verschmutzung/VS_OK_05.JPG', 'val' => 0, 'desc' => '', 'err' => 'Leichte Verschmutzung an der Hinterhand, jedoch keine Verkrustung und kleiner als 30 cm.'  ],
                    [ 'src' => 'img/02_Verschmutzung/VS_OK_06.JPG', 'val' => 0, 'desc' => '', 'err' => 'Leichte Verschmutzung im Bereich der Schulter, jedoch keine Verkrustung.'  ],
                    [ 'src' => 'img/02_Verschmutzung/VS_OK_07.JPG', 'val' => 0, 'desc' => '', 'err' => 'Keine Verschmutzung.'  ],
                    [ 'src' => 'img/02_Verschmutzung/VS_OK_08.JPG', 'val' => 0, 'desc' => '', 'err' => 'Keine Verschmutzung.'  ],
                    [ 'src' => 'img/02_Verschmutzung/VS_OK_09.JPG', 'val' => 0, 'desc' => '', 'err' => 'Keine Verschmutzung.'  ],
                    [ 'src' => 'img/02_Verschmutzung/VS_OK_10.JPG', 'val' => 0, 'desc' => 'Beurteilen Sie das stehende Tier.', 'err' => 'Keine Verschmutzung.'  ]
				]
			],
			'3' => [
				'chapter'  => 'Haarlose Stellen',
				'question' => 'Weist das abgebildete Tier eine haarlose Stelle auf?',
				'media'   => [
					[ 'src' => 'img/03_Haarlose_Stellen/H_01.JPG', 'val' => 1, 'desc' => '', 'err' => 'Haarlose Stellen an Fersenbein und Sprunggelenk, wobei letztere größer als 5 cm ist.'  ],
                    [ 'src' => 'img/03_Haarlose_Stellen/H_02.JPG', 'val' => 1, 'desc' => '', 'err' => 'Haarlose Stellen über gesamten Körper auf Grund extremer Verschmutzung.'  ],
                    [ 'src' => 'img/03_Haarlose_Stellen/H_03.JPG', 'val' => 1, 'desc' => '', 'err' => 'Haarlose Stelle im Nacken eindeutig auf Nackenriegel zurückzuführen.'  ],
                    [ 'src' => 'img/03_Haarlose_Stellen/H_04.JPG', 'val' => 1, 'desc' => '', 'err' => 'Haarlose Stellen an Fersenbein und Sprunggelenk, wobei letztere größer als 5 cm ist.'  ],
                    [ 'src' => 'img/03_Haarlose_Stellen/H_05.JPG', 'val' => 1, 'desc' => 'Beurteilen Sie das Tier im Vordergrund.', 'err' => 'Haarlose Stellen an beiden Sprunggelenken; haarlose Stelle an der Innenseite des linken Hinterbeins größer als 5 cm.'  ],
                    [ 'src' => 'img/03_Haarlose_Stellen/H_06.JPG', 'val' => 1, 'desc' => '', 'err' => 'Haarlose Stellen über gesamter Hinterhand in Folge starker Verschmutzung.'  ],
                    [ 'src' => 'img/03_Haarlose_Stellen/H_07.JPG', 'val' => 1, 'desc' => '', 'err' => 'Haarlose Stellen über gesamter Hinterhand in Folge starker Verschmutzung.'  ],
                    [ 'src' => 'img/03_Haarlose_Stellen/H_08.JPG', 'val' => 1, 'desc' => 'Beurteilen Sie das Tier im Vordergrund.', 'err' => 'Haarlose Stelle am Sprunggelenk größer als 5 cm.'  ],
                    [ 'src' => 'img/03_Haarlose_Stellen/H_09.JPG', 'val' => 1, 'desc' => '', 'err' => 'Haarlose Stelle am linken Knie (Karpalgelenk) größer als 5 cm.'  ],
                    [ 'src' => 'img/03_Haarlose_Stellen/H_10.JPG', 'val' => 1, 'desc' => '', 'err' => 'Haarlose Stelle größer als 5 cm.'  ],
                    [ 'src' => 'img/03_Haarlose_Stellen/H_OK_01.JPG', 'val' => 0, 'desc' => '', 'err' => 'Haarlose Stellen an Hinterhand und Flanke, jedoch kleiner als 5 cm.'  ],
                    [ 'src' => 'img/03_Haarlose_Stellen/H_OK_02.JPG', 'val' => 0, 'desc' => '', 'err' => 'Haarlose Stelle am Sprunggelenk, jedoch kleiner als 5 cm.'  ],
                    [ 'src' => 'img/03_Haarlose_Stellen/H_OK_03.JPG', 'val' => 0, 'desc' => '', 'err' => 'Haarlose Stelle am Fersenbein, jedoch kleiner als 5 cm.'  ],
                    [ 'src' => 'img/03_Haarlose_Stellen/H_OK_04.JPG', 'val' => 0, 'desc' => '', 'err' => 'Haarlose Stellen an Sprunggelenk und Fersenbein, jedoch kleiner als 5 cm.'  ],
                    [ 'src' => 'img/03_Haarlose_Stellen/H_OK_05.JPG', 'val' => 0, 'desc' => '', 'err' => 'Haarlose Stellen an Sprunggelenk und Fersenbein, jedoch kleiner als 5 cm.'  ],
                    [ 'src' => 'img/03_Haarlose_Stellen/H_OK_06.JPG', 'val' => 0, 'desc' => '', 'err' => 'Keine haarlosen Stellen erkennbar.'  ],
                    [ 'src' => 'img/03_Haarlose_Stellen/H_OK_07.JPG', 'val' => 0, 'desc' => '', 'err' => 'Haarlose Stellen an Sprunggelenk und Fersenbein, jedoch kleiner als 5 cm.'  ],
                    [ 'src' => 'img/03_Haarlose_Stellen/H_OK_08.JPG', 'val' => 0, 'desc' => '', 'err' => 'Haarlose Stellen an Sprunggelenk und Fersenbein, jedoch kleiner als 5 cm.'  ],
                    [ 'src' => 'img/03_Haarlose_Stellen/H_OK_09.JPG', 'val' => 0, 'desc' => '', 'err' => 'Haarlose Stelle am Nasenbein, jedoch kleiner als 5 cm.'  ],
                    [ 'src' => 'img/03_Haarlose_Stellen/H_OK_10.JPG', 'val' => 0, 'desc' => '', 'err' => 'Haarlose Stelle am Fersenbein, jedoch kleiner als 5 cm.'  ]
				]
			],
            '4' => [
                'chapter'  => 'Schwellungen',
                'question' => 'Weist das abgebildete Tier eine Schwellung auf?',
                'media'   => [
                    [ 'src' => 'img/04_Schwellungen/S_01.JPG', 'val' => 1, 'desc' => '', 'err' => 'Deutliche Schwellung am linken Knie (Karpalgelenk).'  ],
                    [ 'src' => 'img/04_Schwellungen/S_02.JPG', 'val' => 1, 'desc' => '', 'err' => 'Deutliche Schwellung am rechten Sprunggelenk.'  ],
                    [ 'src' => 'img/04_Schwellungen/S_03.JPG', 'val' => 1, 'desc' => 'Beurteilen Sie das Tier auf der linken Bildseite.', 'err' => 'Massive Schwellung des gesamten linken Hinterbeins.'  ],
                    [ 'src' => 'img/04_Schwellungen/S_04.JPG', 'val' => 1, 'desc' => '', 'err' => 'Schwellung an der linken Schulter durch mangelhafte Aufstallung.'  ],
                    [ 'src' => 'img/04_Schwellungen/S_05.JPG', 'val' => 1, 'desc' => '', 'err' => 'Deutliche Schwellung am linken Sprunggelenk.'  ],
                    [ 'src' => 'img/04_Schwellungen/S_06.JPG', 'val' => 1, 'desc' => '', 'err' => 'Deutliche Schwellung am linken Knie (Karpalgelenk).'  ],
                    [ 'src' => 'img/04_Schwellungen/S_07.JPG', 'val' => 1, 'desc' => '', 'err' => 'Deutliche Schwellung am rechten Sprunggelenk.'  ],
                    [ 'src' => 'img/04_Schwellungen/S_08.JPG', 'val' => 1, 'desc' => '', 'err' => 'Schwellung am Sprunggelenk.'  ],
                    [ 'src' => 'img/04_Schwellungen/S_09.JPG', 'val' => 1, 'desc' => '', 'err' => 'Deutliche Schwellung am rechten Knie (Karpalgelenk).'  ],
                    [ 'src' => 'img/04_Schwellungen/S_10.JPG', 'val' => 1, 'desc' => '', 'err' => 'Massive Schwellung am rechten Sitzbeinhöcker.'  ],
                    [ 'src' => 'img/04_Schwellungen/S_OK_01.JPG', 'val' => 0, 'desc' => '', 'err' => 'Keine Schwellungen erkennbar.'  ],
                    [ 'src' => 'img/04_Schwellungen/S_OK_02.JPG', 'val' => 0, 'desc' => '', 'err' => 'Keine Schwellungen erkennbar.'  ],
                    [ 'src' => 'img/04_Schwellungen/S_OK_03.JPG', 'val' => 0, 'desc' => '', 'err' => 'Verletzung am linken Sprunggelenk, jedoch keine deutlich sichtbare Umfangsvermehrung.'  ],
                    [ 'src' => 'img/04_Schwellungen/S_OK_04.JPG', 'val' => 0, 'desc' => 'Beurteilen Sie das Tier im Vordergrund.', 'err' => 'Keine Schwellungen erkennbar.'  ],
                    [ 'src' => 'img/04_Schwellungen/S_OK_05.JPG', 'val' => 0, 'desc' => '', 'err' => 'Keine Schwellungen erkennbar.'  ],
                    [ 'src' => 'img/04_Schwellungen/S_OK_06.JPG', 'val' => 0, 'desc' => '', 'err' => 'Haarlose Stelle am linken Knie (Karpalgelenk), jedoch keine Schwellung erkennbar.'  ],
                    [ 'src' => 'img/04_Schwellungen/S_OK_07.JPG', 'val' => 0, 'desc' => 'Beurteilen Sie das Tier im Vordergrund.', 'err' => 'Keine Schwellungen erkennbar.'  ],
                    [ 'src' => 'img/04_Schwellungen/S_OK_08.JPG', 'val' => 0, 'desc' => '', 'err' => 'Keine Schwellungen erkennbar.'  ],
                    [ 'src' => 'img/04_Schwellungen/S_OK_09.JPG', 'val' => 0, 'desc' => '', 'err' => 'Rechtes Knie (Karpalgelenk) erscheint etwas größer, jedoch noch keine deutliche Umfangsvermehrung erkennbar.'  ],
                    [ 'src' => 'img/04_Schwellungen/S_OK_10.JPG', 'val' => 0, 'desc' => '', 'err' => 'Linkes Knie (Karpalgelenk) erscheint etwas verdickt, jedoch noch keine deutliche Umfangsvermehrung erkennbar.'  ]
                ]
            ],
            '5' => [
                'chapter'  => 'Verletzungen',
                'question' => 'Weist das abgebildete Tier eine Verletzung auf?',
                'media'   => [
                    [ 'src' => 'img/05_Verletzungen/VL_01.JPG', 'val' => 1, 'desc' => 'Beurteilen Sie das Tier auf der linken Bildseite.', 'err' => 'Verkrustete Verletzung im Bereich des hinteren Kniegelenks, größer als eine 1-Euro-Münze.'  ],
                    [ 'src' => 'img/05_Verletzungen/VL_02.JPG', 'val' => 1, 'desc' => '', 'err' => 'Verkrustete Verletzung am Sprunggelenk, größer als eine 1-Euro-Münze.'  ],
                    [ 'src' => 'img/05_Verletzungen/VL_03.JPG', 'val' => 1, 'desc' => '', 'err' => 'Verkrustete Verletzungen am Fersenbein, größer als eine 1-Euro-Münze.'  ],
                    [ 'src' => 'img/05_Verletzungen/VL_04.JPG', 'val' => 1, 'desc' => '', 'err' => 'Verkrustete Verletzungen an Sprunggelenk und Fersenbein, größer als eine 1-Euro-Münze.'  ],
                    [ 'src' => 'img/05_Verletzungen/VL_05.JPG', 'val' => 1, 'desc' => '', 'err' => 'Verkrustete Verletzung am Euter, größer als eine 1-Euro-Münze.'  ],
                    [ 'src' => 'img/05_Verletzungen/VL_06.JPG', 'val' => 1, 'desc' => '', 'err' => 'Verkrustete Verletzung an der Innenseite des Sprunggelenks, größer als eine 1-Euro-Münze.'  ],
                    [ 'src' => 'img/05_Verletzungen/VL_07.JPG', 'val' => 1, 'desc' => '', 'err' => 'Wunde mit Eiterbildung unterhalb des Sprunggelenks, größer als eine 1-Euro-Münze.'  ],
                    [ 'src' => 'img/05_Verletzungen/VL_08.JPG', 'val' => 1, 'desc' => '', 'err' => 'Verletzung einer Zitze.'  ],
                    [ 'src' => 'img/05_Verletzungen/VL_09.JPG', 'val' => 1, 'desc' => '', 'err' => 'Verkrustete Verletzung an der Innenseite des linken Sprunggelenks, größer als eine 1-Euro-Münze.'  ],
                    [ 'src' => 'img/05_Verletzungen/VL_10.JPG', 'val' => 1, 'desc' => 'Beurteilen Sie das Tier im Vordergrund.', 'err' => 'Aufgeplatzter Abszess. Kann bei großrahmigen Tieren vorkommen, die am zu niedrigen Nackenriegel eine permanente Druckstelle haben.'  ],
                    [ 'src' => 'img/05_Verletzungen/VL_OK_01.JPG', 'val' => 0, 'desc' => '', 'err' => 'Haarlose Stelle mit minimaler Verkrustung. Kleiner als eine 1-Euro-Münze.'  ],
                    [ 'src' => 'img/05_Verletzungen/VL_OK_02.JPG', 'val' => 0, 'desc' => '', 'err' => 'Haarlose Stelle, keine Verletzung.'  ],
                    [ 'src' => 'img/05_Verletzungen/VL_OK_03.JPG', 'val' => 0, 'desc' => '', 'err' => 'Keine Verletzung erkennbar.'  ],
                    [ 'src' => 'img/05_Verletzungen/VL_OK_04.JPG', 'val' => 0, 'desc' => 'Beurteilen Sie das Tier im Vordergrund.', 'err' => 'Kleine haarlose Stelle an der Hinterhand, keine Verletzung.'  ],
                    [ 'src' => 'img/05_Verletzungen/VL_OK_05.JPG', 'val' => 0, 'desc' => '', 'err' => 'Haarlose Stelle am Knie (Karpalgelenk), keine Verletzung.'  ],
                    [ 'src' => 'img/05_Verletzungen/VL_OK_06.JPG', 'val' => 0, 'desc' => '', 'err' => 'Keine Verletzung erkennbar.'  ],
                    [ 'src' => 'img/05_Verletzungen/VL_OK_07.JPG', 'val' => 0, 'desc' => '', 'err' => 'Keine Verletzung erkennbar.'  ],
                    [ 'src' => 'img/05_Verletzungen/VL_OK_08.JPG', 'val' => 0, 'desc' => '', 'err' => 'Haarlose Stelle am Fersenbein, keine Verletzung.'  ],
                    [ 'src' => 'img/05_Verletzungen/VL_OK_09.JPG', 'val' => 0, 'desc' => '', 'err' => 'Keine Verletzung erkennbar.'  ],
                    [ 'src' => 'img/05_Verletzungen/VL_OK_10.JPG', 'val' => 0, 'desc' => '', 'err' => 'Keine Verletzung erkennbar.'  ]
                ]
            ],
			'6' => [
				'chapter'  => 'Hautpilze und Hautparasiten',
				'question' => 'Weist das abgebildete Tier einen Hautpilz oder einen Hautparasit auf?',
				'media'   => [
					[ 'src' => 'img/06_Hautpilze_Hautparasiten/P_01.JPG', 'val' => 1, 'desc' => '', 'err' => 'Typische runde haarlose Stellen durch Pilzbefall (Rinderflechte), Haut rauh, derb, dick.'  ],
        			[ 'src' => 'img/06_Hautpilze_Hautparasiten/P_02.JPG', 'val' => 1, 'desc' => '', 'err' => 'Pilzbedingter, kreisrunder Haarausfall.'  ],
        			[ 'src' => 'img/06_Hautpilze_Hautparasiten/P_03.JPG', 'val' => 1, 'desc' => '', 'err' => 'Pilzbedingter, kreisrunder bis flächiger Haarausfall.'  ],
        			[ 'src' => 'img/06_Hautpilze_Hautparasiten/P_04.JPG', 'val' => 1, 'desc' => '', 'err' => 'Schorfige Auflagerungen durch Parasitenbefall (Milben) am Schwanzansatz. Vermehrtes Scheuern wegen Juckreiz führt zu Haarausfall.'  ],
        			[ 'src' => 'img/06_Hautpilze_Hautparasiten/P_05.JPG', 'val' => 1, 'desc' => '', 'err' => 'Pilzbedingter, kreisrunder bis flächiger Haarausfall; Haut rauh, derb, dick.'  ],
        			[ 'src' => 'img/06_Hautpilze_Hautparasiten/P_06.JPG', 'val' => 1, 'desc' => 'Beurteilen Sie das Tier in der Bildmitte.', 'err' => 'Parasitenbefall am Schwanzansatz. Vermehrters Scheuern wegen Juckreiz führt zu Haarausfall.'  ],
        			[ 'src' => 'img/06_Hautpilze_Hautparasiten/P_07.JPG', 'val' => 1, 'desc' => '', 'err' => 'Parasitenbefall am Schwanzansatz, Pustelbildung. Vermehrters Scheuern wegen Juckreiz führt zu Haarausfall.'  ],
        			[ 'src' => 'img/06_Hautpilze_Hautparasiten/P_08.JPG', 'val' => 1, 'desc' => '', 'err' => 'Pilzbedingter, kreisrunder bis flächiger Haarausfall; Haut rauh, derb, dick.'  ],
        			[ 'src' => 'img/06_Hautpilze_Hautparasiten/P_09.JPG', 'val' => 1, 'desc' => '', 'err' => 'Pilzbedingter, kreisrunder bis flächiger Haarausfall; Haut rauh, derb, dick.'  ],
        			[ 'src' => 'img/06_Hautpilze_Hautparasiten/P_10.JPG', 'val' => 1, 'desc' => '', 'err' => 'Pilzbedingter, kreisrunder bis flächiger Haarausfall; Haut rauh, derb, dick.'  ],
        			[ 'src' => 'img/06_Hautpilze_Hautparasiten/P_OK_01.JPG', 'val' => 0, 'desc' => '', 'err' => 'Lückiges Fellkleid als Folge starker Verschmutzung.'  ],
        			[ 'src' => 'img/06_Hautpilze_Hautparasiten/P_OK_02.JPG', 'val' => 0, 'desc' => '', 'err' => 'Lückiges Fellkleid als Folge starker Verschmutzung.'  ],
        			[ 'src' => 'img/06_Hautpilze_Hautparasiten/P_OK_03.JPG', 'val' => 0, 'desc' => '', 'err' => 'Normales Fellkleid.'  ],
        			[ 'src' => 'img/06_Hautpilze_Hautparasiten/P_OK_04.JPG', 'val' => 0, 'desc' => '', 'err' => 'Haarlose Stellen als Folge starker Verschmutzung.'  ],
        			[ 'src' => 'img/06_Hautpilze_Hautparasiten/P_OK_05.JPG', 'val' => 0, 'desc' => '', 'err' => 'Normales Fellkleid.'  ],
        			[ 'src' => 'img/06_Hautpilze_Hautparasiten/P_OK_06.JPG', 'val' => 0, 'desc' => '', 'err' => 'Normales Fellkleid.'  ],
        			[ 'src' => 'img/06_Hautpilze_Hautparasiten/P_OK_07.JPG', 'val' => 0, 'desc' => '', 'err' => 'Normales Fellkleid.'  ],
        			[ 'src' => 'img/06_Hautpilze_Hautparasiten/P_OK_08.JPG', 'val' => 0, 'desc' => '', 'err' => 'Lückiges Fellkleid auf Grund starker Verschmutzung.'  ],
        			[ 'src' => 'img/06_Hautpilze_Hautparasiten/P_OK_09.JPG', 'val' => 0, 'desc' => '', 'err' => 'Haarlose Stellen auf Grund starker Verschmutzung.'  ],
        			[ 'src' => 'img/06_Hautpilze_Hautparasiten/P_OK_10.JPG', 'val' => 0, 'desc' => '', 'err' => 'Durchfallbedingter Haarausfall an Schwanz und Hinterhand.'  ]
				]
			],
			'7' => [
				'chapter'  => 'Klauenzustand',
				'question' => 'Befinden sich die abgebildeten Klauen in einem ordnungsgemäßen Zustand?',
				'media'   => [
					[ 'src' => 'img/07_Klauenzustand/Klaue_01.JPG', 'val' => 0, 'desc' => '', 'err' => 'Klauen ungleich lang und gekrümmt.'  ],
        			[ 'src' => 'img/07_Klauenzustand/Klaue_02.JPG', 'val' => 0, 'desc' => '', 'err' => 'Klauen zu lang und nach innen gekrümmt.'  ],
        			[ 'src' => 'img/07_Klauenzustand/Klaue_03.JPG', 'val' => 0, 'desc' => '', 'err' => 'Klauen zu lang und nach innen gekrümmt.'  ],
        			[ 'src' => 'img/07_Klauenzustand/Klaue_04.JPG', 'val' => 0, 'desc' => '', 'err' => 'Innenklaue des rechten Vorderfußes (Bildmitte) zu lang, wächst über äußere Klaue nach außen.'  ],
        			[ 'src' => 'img/07_Klauenzustand/Klaue_05.JPG', 'val' => 0, 'desc' => '', 'err' => 'Klauen am rechten Vorderfuß zu lang und überkreuzt.'  ],
        			[ 'src' => 'img/07_Klauenzustand/Klaue_06.JPG', 'val' => 0, 'desc' => '', 'err' => 'Klauen zu lang und überkreuzt.'  ],
        			[ 'src' => 'img/07_Klauenzustand/Klaue_07.JPG', 'val' => 0, 'desc' => '', 'err' => 'Klauen viel zu lang.'  ],
        			[ 'src' => 'img/07_Klauenzustand/Klaue_08.JPG', 'val' => 0, 'desc' => '', 'err' => 'Klauen zu lang und überkreuzt.'  ],
        			[ 'src' => 'img/07_Klauenzustand/Klaue_09.JPG', 'val' => 0, 'desc' => '', 'err' => 'Klauen zu lang und überkreuzt.'  ],
        			[ 'src' => 'img/07_Klauenzustand/Klaue_10.JPG', 'val' => 0, 'desc' => '', 'err' => 'Klauen ungleich lang.'  ],
        			[ 'src' => 'img/07_Klauenzustand/Klaue_OK_01.JPG', 'val' => 1, 'desc' => '', 'err' => 'Klauen kurz, aber in Ordnung.'  ],
        			[ 'src' => 'img/07_Klauenzustand/Klaue_OK_02.JPG', 'val' => 1, 'desc' => '', 'err' => 'Klauen in Ordnung.'  ],
        			[ 'src' => 'img/07_Klauenzustand/Klaue_OK_03.JPG', 'val' => 1, 'desc' => '', 'err' => 'Klauen in Ordnung.'  ],
        			[ 'src' => 'img/07_Klauenzustand/Klaue_OK_04.JPG', 'val' => 1, 'desc' => '', 'err' => 'Klauen in Ordnung.'  ],
        			[ 'src' => 'img/07_Klauenzustand/Klaue_OK_05.JPG', 'val' => 1, 'desc' => '', 'err' => 'Klauen in Ordnung.'  ],
        			[ 'src' => 'img/07_Klauenzustand/Klaue_OK_06.JPG', 'val' => 1, 'desc' => '', 'err' => 'Klauen in Ordnung.'  ],
        			[ 'src' => 'img/07_Klauenzustand/Klaue_OK_07.JPG', 'val' => 1, 'desc' => '', 'err' => 'Deutlicher Klauenspalt der jedoch bei gutem Klauenzustand unproblematisch ist.'  ],
        			[ 'src' => 'img/07_Klauenzustand/Klaue_OK_08.JPG', 'val' => 1, 'desc' => '', 'err' => 'Klauen in Ordnung.'  ],
        			[ 'src' => 'img/07_Klauenzustand/Klaue_OK_09.JPG', 'val' => 1, 'desc' => '', 'err' => 'Klauen in Ordnung.'  ],
        			[ 'src' => 'img/07_Klauenzustand/Klaue_OK_10.JPG', 'val' => 1, 'desc' => '', 'err' => 'Klauen in Ordnung.'  ]
				]
			],
			'8' => [
				'chapter'  => 'Lahmheit',
				'question' => 'Ist das gezeigte Tier als lahm zu beurteilen?',
				'media'   => [
					[ 'src' => 'https://www.youtube.com/embed/SoII9CR1oJ8', 'val' => 1, 'desc' => '', 'err' => 'Ungleichmäßiger Gang mit verkürzten Schritten, linkes Hinterbein wird schnell vorgezogen, stark gekrümmter Rücken.'  ],
        			[ 'src' => 'https://www.youtube.com/embed/YjwJFVdMyI4', 'val' => 1, 'desc' => '', 'err' => 'Tier versucht linkes Hinterbein nicht zu belasten, muss angetrieben werden. Starke Ausgleichsbewegung mit dem Kopf und gekrümmter Rücken.'  ],
        			[ 'src' => 'https://www.youtube.com/embed/4srC5l36sqc', 'val' => 1, 'desc' => '', 'err' => 'Ungleichmäßiger Gang, linkes Hinterbein wird schnell nachgezogen um Belastung auf dem rechten Hinterbein zu minimieren. Starke Ausgleichsbewegung mit dem Kopf und gekrümmter Rücken.'  ],
        			[ 'src' => 'https://www.youtube.com/embed/n0N9WpYBfUw', 'val' => 1, 'desc' => '', 'err' => 'Stark verkürzter Schritt, Tier versucht rechtes Hinterbein möglichst nicht zu belasten.'  ],
        			[ 'src' => 'https://www.youtube.com/embed/1s-sxjx3dCY', 'val' => 1, 'desc' => '', 'err' => 'Ungleichmäßiger Gang, linkes Hinterbein wird schnell nachgezogen um Belastung auf dem rechten Hinterbein zu minimieren. Leicht gekrümmter Rücken.'  ],
        			[ 'src' => 'https://www.youtube.com/embed/YZDspSgJugc', 'val' => 1, 'desc' => '', 'err' => 'Stark lahmes Tier. Rechtes Hinterbein wird möglichst nicht belastet. Starke Ausgleichsbewegung mit dem Kopf und stark gekrümmter Rücken.'  ],
        			[ 'src' => 'https://www.youtube.com/embed/WUvbsMQMpsI', 'val' => 1, 'desc' => '', 'err' => 'Ungleichmäßiger Gang, linkes Hinterbein wird schnell nachgeogen um Belastung auf dem rechten Hinterbein zu minimieren. Ausgleichsbewegung mit dem Kopf, Rücken leicht gekrümmt.'  ],
        			[ 'src' => 'https://www.youtube.com/embed/yNcYJA4C10U', 'val' => 0, 'desc' => '', 'err' => 'Normales Gangbild, elastischer Gang.'  ],
        			[ 'src' => 'https://www.youtube.com/embed/Q2Yvaetmgjo', 'val' => 0, 'desc' => '', 'err' => 'Normales Gangbild.'  ],
        			[ 'src' => 'https://www.youtube.com/embed/hz7MqvQ0XBc', 'val' => 0, 'desc' => '', 'err' => 'Normales Gangbild; Hintere Klauen treten fast in Abdruck der Vorderklauen.'  ],
        			[ 'src' => 'https://www.youtube.com/embed/aZYnRk42l10', 'val' => 0, 'desc' => '', 'err' => 'Überkonditioniertes Tier, geht langsam und stellt die Hinterbeine seitlich aus. Alle vier Beine werden jedoch gleichmäßig belastet.'  ],
        			[ 'src' => 'https://www.youtube.com/embed/63EG8rbQdFQ', 'val' => 0, 'desc' => '', 'err' => 'Tier geht langsam und muss angetrieben werden. Jedoch werden alle vier Beine gleichmäßig belastet.'  ],
        			[ 'src' => 'https://www.youtube.com/embed/BTpYAbocvAM', 'val' => 0, 'desc' => '', 'err' => 'Normales Gangbild.'  ],
        			[ 'src' => 'https://www.youtube.com/embed/FzJvRbfrjn8', 'val' => 0, 'desc' => '', 'err' => 'Tier geht langsam. Alle vier Beine werden jedoch gleichmäßig belastet.'  ],
        			[ 'src' => 'https://www.youtube.com/embed/2hH3BZdscJ0', 'val' => 0, 'desc' => '', 'err' => 'Normale Belastung der Beine in Anbindehaltung, auch bei Seitwärtsbewegung.'  ],
        			[ 'src' => 'https://www.youtube.com/embed/MRI8T-4mNWY', 'val' => 0, 'desc' => '', 'err' => 'Normale Belastung der Beine in Anbindehaltung, auch bei Seitwärtsbewegung.'  ],
        			[ 'src' => 'https://www.youtube.com/embed/0vmVbxZb5dU', 'val' => 0, 'desc' => '', 'err' => 'Normale Belastung der Beine in Anbindehaltung, auch bei Seitwärtsbewegung.'  ],
        			[ 'src' => 'https://www.youtube.com/embed/HtJpFs3fhGg', 'val' => 0, 'desc' => '', 'err' => 'Normale Belastung der Beine in Anbindehaltung, auch bei Seitwärtsbewegung.'  ],
        			[ 'src' => 'https://www.youtube.com/embed/wjpaSl_YFDI', 'val' => 0, 'desc' => '', 'err' => 'Normale Belastung der Beine in Anbindehaltung, auch bei Seitwärtsbewegung.'  ],
        			[ 'src' => 'https://www.youtube.com/embed/ejXfiloHDSg', 'val' => 0, 'desc' => '', 'err' => 'Normale Belastung der Beine in Anbindehaltung, auch bei Seitwärtsbewegung.'  ],
        			[ 'src' => 'https://www.youtube.com/embed/HCY4JKzZWek', 'val' => 0, 'desc' => '', 'err' => 'Normale Belastung der Beine in Anbindehaltung, auch bei Seitwärtsbewegung.'  ],
        			[ 'src' => 'https://www.youtube.com/embed/nDLTJ1hewZY', 'val' => 1, 'desc' => '', 'err' => 'Tier trippelt am Stand (wiederholte Entlastung).'  ],
        			[ 'src' => 'https://www.youtube.com/embed/PUDeQxGt7rw', 'val' => 1, 'desc' => 'Beurteilen Sie das von der Person bewegte Tier.', 'err' => 'Linkes Hinterbein wird rasch umgestellt um das rechte Hinterbein möglichst nicht zu belasten.'  ],
        			[ 'src' => 'https://www.youtube.com/embed/ktUK1DC-aCw', 'val' => 1, 'desc' => '', 'err' => 'Tier trippelt am Stand (wiederholte Entlastung).'  ],
        			[ 'src' => 'https://www.youtube.com/embed/UpWTb3ZdLI8', 'val' => 1, 'desc' => 'Beurteilen Sie das Tier im Vordergrund. Im zweiten Teil des Videos wird das Tier von einer Person bewegt.', 'err' => 'Tier trippelt am Stand, ungleichmäßige Belastung vor allem bei Seitwärtsbewegung nach links.'  ],
        			[ 'src' => 'https://www.youtube.com/embed/4rFYC_sQSCw', 'val' => 1, 'desc' => '', 'err' => 'Rechtes Hinterbein nach außen gedreht. Linkes Hinterbein wird beim Umsteigen rasch nachgezogen um rechtes Hinterbein möglichst nicht zu belasten.'  ],
        			[ 'src' => 'https://www.youtube.com/embed/_nncBpqDhC8', 'val' => 1, 'desc' => 'Beurteilen Sie das zweite Tier von vorne.', 'err' => 'Linkes Hinterbein auf der Kotkante abgestellt um schmerzhaften Klauenbereich nicht zu belasten. Tier trippelt mehrmals auf dem linken Hinterbein und stellt es wieder auf der Kotkante ab.'  ],
        			[ 'src' => 'https://www.youtube.com/embed/z1RSlWvIkVo', 'val' => 1, 'desc' => 'Beurteilen Sie das zweite Tier von vorne.', 'err' => 'Rechtes Hinterbein wird auf Kotkante abgestellt um schmerzhaften Klauenbereich nicht zu belasten. Zusätzliches Trippeln auf dem rechten Hinterbein.'  ]
				]
			],
			'9' => [
				'chapter'  => 'Kotkonsistenz',
				'question' => 'Hat das abgebildete Tier Durchfall bzw. zeigt es Anzeichen von Durchfall?',
				'media'   => [
					[ 'src' => 'img/09_Kotkonsistenz/K_01.JPG', 'val' => 1, 'desc' => '', 'err' => 'Handflächengroße Verschmutzung links und rechts des Schwanzansatzes weist auf Durchfall hin.'  ],
        			[ 'src' => 'img/09_Kotkonsistenz/K_02.JPG', 'val' => 1, 'desc' => '', 'err' => 'Handflächengroße Verschmutzung links und rechts des Schwanzansatzes weist auf Durchfall hin.'  ],
        			[ 'src' => 'img/09_Kotkonsistenz/K_03.JPG', 'val' => 1, 'desc' => '', 'err' => 'Deutlich dünnflüssiger Kotabsatz im bogenförmigen Strahl.'  ],
        			[ 'src' => 'img/09_Kotkonsistenz/K_04.JPG', 'val' => 1, 'desc' => '', 'err' => 'Deutlich dünnflüssiger Kotabsatz im bogenförmigen Strahl.'  ],
        			[ 'src' => 'img/09_Kotkonsistenz/K_05.JPG', 'val' => 1, 'desc' => '', 'err' => 'Handflächengroße Verschmutzung links und rechts des Schwanzansatzes weist auf Durchfall hin.'  ],
        			[ 'src' => 'img/09_Kotkonsistenz/K_06.JPG', 'val' => 1, 'desc' => '', 'err' => 'Deutlich dünnflüssiger Kotabsatz im bogenförmigen Strahl.'  ],
        			[ 'src' => 'img/09_Kotkonsistenz/K_07.JPG', 'val' => 1, 'desc' => '', 'err' => 'Deutlich dünnflüssiger Kotabsatz im bogenförmigen Strahl.'  ],
        			[ 'src' => 'img/09_Kotkonsistenz/K_08.JPG', 'val' => 1, 'desc' => '', 'err' => '(Noch) ausreichend große Verschmutzung links und rechts des Schwanzansatzes weist auf Durchfall hin.'  ],
        			[ 'src' => 'img/09_Kotkonsistenz/K_09.JPG', 'val' => 1, 'desc' => '', 'err' => '(Noch) ausreichend große Verschmutzung links und rechts des Schwanzansatzes weist auf Durchfall hin.'  ],
        			[ 'src' => 'img/09_Kotkonsistenz/K_10.JPG', 'val' => 1, 'desc' => '', 'err' => 'Deutlich dünnflüssiger Kotabsatz im bogenförmigen Strahl.'  ],
        			[ 'src' => 'img/09_Kotkonsistenz/K_OK_01.JPG', 'val' => 0, 'desc' => '', 'err' => 'Fladenbildung nach Kotabsatz. Konsistenz in Ordnung.'  ],
         			[ 'src' => 'img/09_Kotkonsistenz/K_OK_02.JPG', 'val' => 0, 'desc' => '', 'err' => 'Keine Verschmutzung seitlich des Schwanzansatzes. Kein Hinweis auf Durchfall.'  ],
         			[ 'src' => 'img/09_Kotkonsistenz/K_OK_03.JPG', 'val' => 0, 'desc' => '', 'err' => 'Normale Kotkonsistenz.'  ],
         			[ 'src' => 'img/09_Kotkonsistenz/K_OK_04.JPG', 'val' => 0, 'desc' => '', 'err' => 'Keine Verschmutzung seitlich des Schwanzansatzes. Kein Hinweis auf Durchfall.'  ],
         			[ 'src' => 'img/09_Kotkonsistenz/K_OK_05.JPG', 'val' => 0, 'desc' => '', 'err' => 'Keine Verschmutzung seitlich des Schwanzansatzes. Kein Hinweis auf Durchfall.'  ],
         			[ 'src' => 'img/09_Kotkonsistenz/K_OK_06.JPG', 'val' => 0, 'desc' => '', 'err' => 'Normale Kotkonsistenz.'  ],
         			[ 'src' => 'img/09_Kotkonsistenz/K_OK_07.JPG', 'val' => 0, 'desc' => '', 'err' => 'Minimale Verschmutzung seitlich des Schwanzansatzes. Kein Hinweis auf Durchfall.'  ],
         			[ 'src' => 'img/09_Kotkonsistenz/K_OK_08.JPG', 'val' => 0, 'desc' => '', 'err' => 'Minimale Verschmutzung seitlich des Schwanzansatzes. Kein Hinweis auf Durchfall.'  ],
         			[ 'src' => 'img/09_Kotkonsistenz/K_OK_09.JPG', 'val' => 0, 'desc' => '', 'err' => 'Minimale Verschmutzung seitlich des Schwanzansatzes. Kein Hinweis auf Durchfall.'  ],
         			[ 'src' => 'img/09_Kotkonsistenz/K_OK_10.JPG', 'val' => 0, 'desc' => '', 'err' => 'Normale Kotkonsistenz.'  ]
				]
			],
			'10' => [
				'chapter'  => 'Liegekomfort Kälber',
				'question' => 'Ist ausreichend Einstreu vorhanden?',
				'media'   => [
					[ 'src' => 'img/10_Liegekomfort_Kälber/Kalb_01.JPG', 'val' => 0, 'desc' => '', 'err' => 'Keine Einstreu vorhanden.'  ],
        			[ 'src' => 'img/10_Liegekomfort_Kälber/Kalb_02.JPG', 'val' => 0, 'desc' => '', 'err' => 'Beine des Kalbes voll sichtbar. Einstreu nur schwach bodenbedeckend.'  ],
        			[ 'src' => 'img/10_Liegekomfort_Kälber/Kalb_03.JPG', 'val' => 0, 'desc' => '', 'err' => 'Beine des Kalbes voll sichtbar. Einstreu vollständig mit Kot durchsetzt.'  ],
        			[ 'src' => 'img/10_Liegekomfort_Kälber/Kalb_04.JPG', 'val' => 0, 'desc' => '', 'err' => 'Beine des Kalbes voll sichtbar. Einstreu nur schwach bodenbedeckend.'  ],
        			[ 'src' => 'img/10_Liegekomfort_Kälber/Kalb_05.JPG', 'val' => 0, 'desc' => '', 'err' => 'Beine des Kalbes voll sichtbar.'  ],
        			[ 'src' => 'img/10_Liegekomfort_Kälber/Kalb_06.JPG', 'val' => 0, 'desc' => '', 'err' => 'Beine des Kalbes voll sichtbar. Einstreu nur schwach bodenbedeckend, verkotet und durchnässt.'  ],
        			[ 'src' => 'img/10_Liegekomfort_Kälber/Kalb_07.JPG', 'val' => 0, 'desc' => '', 'err' => 'Beine des Kalbes voll sichtbar. Einstreu vollständig mit Kot durchsetzt.'  ],
        			[ 'src' => 'img/10_Liegekomfort_Kälber/Kalb_08.JPG', 'val' => 0, 'desc' => '', 'err' => 'Beine voll sichtbar. Keine Einstreu vorhanden.'  ],
        			[ 'src' => 'img/10_Liegekomfort_Kälber/Kalb_09.JPG', 'val' => 0, 'desc' => '', 'err' => 'Beine voll sichtbar. Einstreu stark mit Kot durchsetzt.'  ],
        			[ 'src' => 'img/10_Liegekomfort_Kälber/Kalb_10.JPG', 'val' => 0, 'desc' => '', 'err' => 'Keine Einstreu vorhanden.'  ],
        			[ 'src' => 'img/10_Liegekomfort_Kälber/Kalb_OK_01.JPG', 'val' => 1, 'desc' => '', 'err' => 'Beine gut mit Einstreu bedeckt. Einstreu sauber und trocken.'  ],
        			[ 'src' => 'img/10_Liegekomfort_Kälber/Kalb_OK_02.JPG', 'val' => 1, 'desc' => '', 'err' => 'Beine gut mit Einstreu bedeckt. Einstreu sauber und trocken.'  ],
        			[ 'src' => 'img/10_Liegekomfort_Kälber/Kalb_OK_03.JPG', 'val' => 1, 'desc' => '', 'err' => 'Beine teilweise mit Einstreu bedeckt. Einstreu sauber und trocken.'  ],
        			[ 'src' => 'img/10_Liegekomfort_Kälber/Kalb_OK_04.JPG', 'val' => 1, 'desc' => '', 'err' => 'Beine gut mit Einstreu bedeckt. Einstreu sauber und trocken.'  ],
        			[ 'src' => 'img/10_Liegekomfort_Kälber/Kalb_OK_05.JPG', 'val' => 1, 'desc' => '', 'err' => 'Beine teilweise mit Einstreu bedeckt. Einstreu sauber und trocken.'  ],
        			[ 'src' => 'img/10_Liegekomfort_Kälber/Kalb_OK_06.JPG', 'val' => 1, 'desc' => '', 'err' => 'Beine teilweise mit Einstreu bedeckt. Einstreu sauber und trocken.'  ],
        			[ 'src' => 'img/10_Liegekomfort_Kälber/Kalb_OK_07.JPG', 'val' => 1, 'desc' => '', 'err' => 'Beine gut mit Einstreu bedeckt. Einstreu sauber und trocken.'  ],
        			[ 'src' => 'img/10_Liegekomfort_Kälber/Kalb_OK_08.JPG', 'val' => 1, 'desc' => '', 'err' => 'Beine gut mit Einstreu bedeckt. Einstreu sauber und trocken.'  ],
        			[ 'src' => 'img/10_Liegekomfort_Kälber/Kalb_OK_09.JPG', 'val' => 1, 'desc' => '', 'err' => 'Beine teilweise mit Einstreu bedeckt. Einstreu sauber und trocken.'  ],
        			[ 'src' => 'img/10_Liegekomfort_Kälber/Kalb_OK_10.JPG', 'val' => 1, 'desc' => '', 'err' => 'Beine gut mit Einstreu bedeckt. Einstreu sauber und trocken.'  ]
				]
			]
		];

		return $records[$quiz];

	}

}