<?php
/**
 * The header for our theme
 * Template Name: Datenschutz
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Application
 */
global $application_opt;

get_header();
?>
    <!-- Content -->
    <div class="togo-side-content">
    <!-- Lines -->
    <div class="content-lines-wrapper">
        <div class="content-lines-inner">
            <div class="content-lines"></div>
        </div>
    </div>
    <!-- About -->
    <section class="about" style="padding:60px 0">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mb-20">
                                                
                        <h1><?php the_title();?></h1>
                        Verantwortliche Stelle im Sinne der Datenschutzgesetze, insbesondere der EU-Datenschutzgrundverordnung (DSGVO), ist:</br></br>
                        <h5>VS Fugenservice</h5>
                        <?php echo wp_kses_post($application_opt['impressum_address']);?></br>
                        E-Mail:<?php echo esc_html($application_opt['impressum_email']);?></br>
                        Website: <a href="<?php echo esc_html($application_opt['impressum_website_url']);?>" target="_blank" rel="noopener noreferrer"><?php echo esc_html($application_opt['impressum_website_url']);?></a></br>
                        Vertretungsberechtigt sind: <?php echo esc_html($application_opt['impressum_company']);?></p>

                        <hr>
						<h2>Datenschutzerklärung gemäß EU - DSGVO<br /><br /></h2>
						<h1>1. Datenschutz im Überblick</h1>
						
						<h3>Allgemeine Hinweise</h3>
                        <p>Diese Datenschutzerklärung klärt Sie über die Art, den Umfang und Zweck der Verarbeitung von personenbezogenen Daten (nachfolgend kurz „Daten“) innerhalb unseres Onlineangebotes und der mit ihm verbundenen Webseiten, Funktionen und Inhalte sowie externen Onlinepräsenzen, wie z.B. unser Social Media Profile, sowie die Ihnen zustehenden Rechte auf. Nachfolgende Hinweise geben einen vereinfachten Überblick darüber, was mit Ihren personenbezogenen Daten passiert, wenn Sie unsere Webseite besuchen. Personenbezogene Daten sind jegliche Daten, mit welchen Sie persönlich identifiziert werden können <a title="Art. 4 Nr. 1 DSGVO" href="https://dsgvo-gesetz.de/art-4-dsgvo/" target="_blank" rel="noopener noreferrer">(Art. 4 Nr. 1 DSGVO)</a>.</p>
                            
                        <h2>Maklerleistungen</h2>
                        <p>Wir verarbeiten die Daten unserer Kunden, Klienten und Interessenten (einheitlich bezeichnet als „Kunden“) entsprechen Art. 6 Abs. 1 lit. b. DSGVO, um ihnen gegenüber unsere vertraglichen oder vorvertraglichen Leistungen zu erbringen. Die hierbei verarbeiteten Daten, die Art, der Umfang und der Zweck und die Erforderlichkeit ihrer Verarbeitung bestimmen sich nach dem zugrundeliegenden Auftrag. Dazu gehören grundsätzlich Bestands- und Stammdaten der Kunden (Name, Adresse, etc.), als auch die Kontaktdaten (E-Mailadresse, Telefon, etc.), die Vertragsdaten (Inhalt der Beauftragung, Entgelte, Laufzeiten, Angaben zu den vermittelten Unternehmen/ Versicherern/ Leistungen) und Zahlungsdaten (Provisionen, Zahlungshistorie, etc.). Wir können ferner die Angaben zu den Eigenschaften und Umständen von Personen oder ihnen gehörenden Sachen verarbeiten, wenn dies zum Gegenstand unseres Auftrags gehört. Dies können z.B. Angaben zu persönlichen Lebensumständen, mobilen oder immobilen Sachgütern sein.<br />
                        In Rahmen unserer Beauftragung kann es auch erforderlich sein, dass wir besondere Kategorien von Daten gem. Art. 9 Abs. 1 DSGVO, hier insbesondere Angaben zur Gesundheit einer Person verarbeiten. Hierzu holen wir, sofern erforderlich, gem. Art. 6 Abs. 1 lit a., Art. 7, Art. 9 Abs. 2 lit. a DSGVO eine ausdrückliche Einwilligung der Kunden ein.<br />
                        Sofern für die Vertragserfüllung oder gesetzlich erforderlich, offenbaren oder übermitteln wir die Daten der Kunden im Rahmen von Deckungsanfragen, Abschlüssen und Abwicklungen von Verträgen Daten an Anbieter der vermittelten Leistungen/ Objekte, Versicherer, Rückversicherer, Maklerpools, technische Dienstleister, sonstige Dienstleister, wie z.B. kooperierende Verbände, sowie Finanzdienstleister, Kreditinstitute und Kapitalanlagegesellschaften sowie Sozialversicherungsträger, Steuerbehörden, Steuerberater, Rechtsberater, Wirtschaftsprüfer, Versicherungs-Ombudsmänner und die Anstalten Bundesanstalt für Finanzdienstleistungsaufsicht (BaFin). Ferner können wir Unterauftragnehmer beauftragen, wie z.B. Untervermittler. Wir holen eine Einwilligung der Kunden ein, sofern diese zur Offenbarung/ Übermittlung eine Einwilligung der Kunden erforderlich ist (was z.B. im Fall von besonderen Kategorien von Daten gem. Art. 9 DSGVO der Fall sein kann).<br />
                        Die Löschung der Daten erfolgt nach Ablauf gesetzlicher Gewährleistungs- und vergleichbarer Pflichten, wobei die Erforderlichkeit der Aufbewahrung der Daten alle drei Jahre überprüft wird; im Übrigen gelten die gesetzlichen Aufbewahrungspflichten.<br />
                        Im Fall der gesetzlichen Archivierungspflichten erfolgt die Löschung nach deren Ablauf. Aufbewahrungspflichtig sind insbesondere nach deutschem Recht in der Versicherungs- und Finanzbranche Beratungsprotokolle für 5 Jahre, Maklerschlussnoten für 7 Jahre und Maklerverträge für 5 Jahres sowie generell 6 Jahre für handelsrechtlich relevante Unterlagen und 10 Jahre für steuerrechtlich relevante Unterlagen.</p>
							
						<h3><br />Datenerfassung im Rahmen unserer Geschäftstätigkeit</h3>
						<p><strong>Vertragsdaten</strong><br />Wir erheben, verarbeiten und speichern die Daten, die Sie angeben, wenn Sie bei uns bestellen. Außerdem speichern und verarbeiten wir Daten über den Auftrags- und Zahlungsverlauf. Dazu gehören.</p>
						<ul>
						<li>Bestandsdaten (z.B., Namen, Adressen)</li>
						<li>Kontaktdaten (z.B., E-Mail, Telefonnummern)</li>
						<li>Inhaltsdaten (z.B., Texteingaben, Fotografien, Videos)</li>
						<li>Nutzungsdaten (z.B., besuchte Webseiten, Interesse an Inhalten, Zugriffszeiten)</li>
						<li>Meta-/Kommunikationsdaten (z.B., Geräte-Informationen, IP-Adressen).</li>
						</ul>
						<p><strong>Geschäftliche Informationen</strong><br />Nur mit Ihrer ausdrücklichen Zustimmung nutzen wir Ihre Daten, um Ihnen darüber hinaus geschäftliche Informationen übermitteln zu können, zum Beispiel online per Newsletter, postalisch auf schriftlichem Weg oder per Fax.</p>
						<h3>Datenerfassung auf unserer Webseite</h3>
						<p><strong>Wer ist verantwortlich für die Datenerfassung auf unserer Webseite?</strong><br />Die Datenverarbeitung auf dieser Webseite erfolgt durch die Rechenzentren, wo die Webseite gehostet wird.</p>
						<p style="padding-left: 30px;"><strong>STRATO AG</strong><br />Pascalstraße 10<br />
10587 Berlin </p>
						<p><strong>Wie erfassen wir Ihre Daten?</strong></p>
						<ol>
						<li style="padding-left: 30px;">Daten werden dadurch erhoben, dass Sie uns diese selbst mitteilen. Hierbei kann es sich z. B. um Daten handeln, welche Sie möglicherweise per Kontaktformular übermitteln.</li>
						<li style="padding-left: 30px;">Durch die IT-Systeme werden automatisch beim Betreten der Webseite weitere Daten erfasst. Dies sind vor allem technische Daten (z. B. Internetbrowser, Betriebssystem oder Datum und Uhrzeit des Seitenaufrufs).</li>
						</ol>
						<p><strong>Wofür werden Ihre Daten genutzt?</strong></p>
						<p>Ein Teil der Daten wird erhoben, um einen fehlerfreien Betrieb dieser Webseite für Sie zu gewährleisten. Zweck der Verarbeitung ist</p>
						<ul>
						<li>Zurverfügungstellung des Onlineangebotes, seiner Funktionen und Inhalte</li>
						<li>Beantwortung von Kontaktanfragen und Kommunikation mit Nutzern</li>
						<li>Sicherheitsmaßnahmen</li>
						<li>Reichweitenmessung/Marketing</li>
						</ul>
						<br>
						<h3>Analyse- und Drittanbieter-Tools</h3>
						
						<p>Beim Besuch unserer Webseite kann Ihr Surfverhalten statistisch ausgewertet werden. Das geschieht vor allem mit Cookies und sogenannten Analyseprogrammen. Die Analyse Ihres Surfverhaltens erfolgt in der Regel anonym; das Surfverhalten kann nicht zu Ihnen zurückverfolgt werden. Sie können dieser Analyse widersprechen oder sie durch die Nichtbenutzung bestimmter Tools verhindern. Detaillierte Informationen dazu finden Sie in den folgenden Abschnitten dieser Datenschutzerklärung.<br /><br /></p>						
						<h1>2. Allgemeine Hinweise und Pflichtinformationen</h1>
						<h3>Datenschutz</h3>
						<p>Wir nehmen den Schutz Ihrer persönlichen Daten sehr ernst und behandeln Ihre personenbezogenen Daten vertraulich und entsprechend der gesetzlichen Datenschutzvorschriften sowie dieser Datenschutzerklärung.<br /><br />Wenn Sie diese Webseite benutzen, werden verschiedene personenbezogene Daten erhoben. Personenbezogene Daten sind jegliche Daten, mit welchen Sie persönlich identifiziert werden können. Die vorliegende Datenschutzerklärung erläutert, welche Daten wir erheben und wofür wir diese nutzen. Sie erläutert ebenfalls, wie und zu welchem Zweck dies geschieht.<br /><br />Wir weisen darauf hin, dass die Datenübertragung im Internet (z. B. bei der Kommunikation per E-Mail) Sicherheitslücken aufweisen kann. Ein lückenloser Schutz der Daten vor dem Zugriff durch Dritte ist technisch nicht möglich.<br /><br /></p>
						<div>
						<h3>SSL- bzw. TLS-Verschlüsselung</h3>
						<p>Diese Seite nutzt aus Sicherheitsgründen und zum Schutz der Übertragung vertraulicher Inhalte, wie zum Beispiel Bestellungen oder Anfragen, die Sie an uns als Seitenbetreiber senden, eine SSL-bzw. TLS-Verschlüsselung. Eine verschlüsselte Verbindung erkennen Sie daran, dass die Adresszeile des Browsers von “http://” auf “https://” wechselt und abhängig vom verwendeten Browser an dem Schloss-Symbol in Ihrer Browseradressezeile.<br /><br />Wenn die SSL- bzw. TLS-Verschlüsselung aktiviert ist, können die Daten, welche Sie an uns übermitteln, nach derzeitigem technischen Stand nicht von Dritten mitgelesen werden.</p>
						<h3>Verschlüsselter Zahlungsverkehr auf dieser Webseite</h3>
						<p>Besteht nach dem Abschluss eines kostenpflichtigen Vertrags eine Verpflichtung, uns Ihre Zahlungsdaten (z. B. IBAN bei lastschrift mit SEPA-Mandat) zu übermitteln, werden diese Daten zur Zahlungsabwicklung benötigt.<br /><br />Der Zahlungsverkehr über die gängigen Zahlungsmittel erfolgt ausschließlich über eine verschlüsselte SSL- bzw. TLS-Verbindung. Eine verschlüsselte Verbindung erkennen Sie daran, dass die Adresszeile des Browsers von “http://” auf “https://” wechselt und abhängig vom verwendeten Browser an dem Schloss-Symbol in Ihrer Browseradressezeile.<br /><br />Bei verschlüsselter Kommunikation können Ihre Zahlungsdaten, die Sie an uns übermitteln, nach derzeitigem technischen Stand nicht von Dritten mitgelesen werden.<br /><br /></p>
						<h1>3. Datenschutzbeauftragter</h1>
						<p>Laut Gesetz ist bei der From unseres Unternehmens kein Datenschutzbeauftragter gesetzlich vorgeschrieben; bei uns gibt es deshalb auch keinen Datenschutzbeauftragten.<br /><br /></p>
						<h1>4. Datenerfassung auf unserer Webseite</h1>
						<h3>Cookies</h3>
						<p>Diese Webseite verwendet teilweise so genannte Cookies. Cookies richten auf Ihrem Rechner keinen Schaden an und enthalten keine Viren. Cookies dienen dazu, unser Angebot nutzerfreundlicher, effektiver, komfortabler und sicherer zu machen. Cookies sind kleine Textdateien, welche auf Ihrem Rechner abgelegt werden und welche Ihr Browser speichert.<br /><br />Die meisten der von uns verwendeten Cookies sind so genannte “Session-Cookies”. Sie werden nach Ende Ihres Besuchs automatisch gelöscht. Andere Cookies bleiben auf Ihrem Endgerät gespeichert bis Sie diese löschen. Diese Cookies ermöglichen es uns, Ihren Browser beim nächsten Besuch wiederzuerkennen.<br /><br />Sie können Ihren Browser so einstellen, dass Sie über das Setzen von Cookies informiert werden und Cookies nur im Einzelfall erlauben, die Annahme von Cookies für bestimmte Fälle oder generell ausschließen, sowie das automatische Löschen der Cookies beim Schließen des Browser aktivieren. Bei der Deaktivierung von Cookies kann die Funktionalität dieser Webseite eingeschränkt sein.<br /><br />Cookies, die zur Durchführung des elektronischen Kommunikationsvorgangs oder zur Bereitstellung bestimmter, von Ihnen erwünschter Funktionen (z.B. Warenkorbfunktion) erforderlich sind, werden auf Grundlage von Art. 6 Abs. 1 lit. f DSGVO gespeichert. Wir haben ein berechtigtes Interesse an der Speicherung von Cookies zur technisch fehlerfreien und optimierten Bereitstellung unserer Dienste.<br /><br />Die Daten werden nicht gemeinsam mit sonstigen personenbezogenen Daten der Nutzer gespeichert. Beim Aufruf unserer Website können die Nutzer durch einen Infobanner über die Verwendung von Cookies zu Analysezwecken informiert und auf diese Datenschutzerklärung verwiesen werden.<br /><br />Soweit andere Cookies (z.B. Cookies zur Analyse Ihres Surfverhaltens) gespeichert werden, werden diese in dieser Datenschutzerklärung gesondert behandelt.<br /><br /><strong>Folgende Cookies werden von dieser Webseite verwendet:</strong><br /><br />1. <strong>Session Cookie</strong><br /> Cookie-Name<br /> Session-ID<br /> Hostname<br /> Gültigkeitsdauer bis zum Ende der Sitzung<br /> <span style="color: darkred; font-weight: bold;">Es findet keine personenbezogene Zuordnung statt.</span><br /><br />2. <strong>Cookie zur Anzeige einer Cookie-Information</strong><br /> Cookie-Name<br /> Wert der Bestätigung der Cookie-Information (true oder false)<br /> Session-ID<br /> Hostname<br /> Gültigkeitsdauer des Cookies beträgt 1 Jahr<br /> <span style="color: darkred; font-weight: bold;">Es findet keine personenbezogene Zuordnung statt.</span><br /><br />3. <strong>Warenkorb-Cookie im Shop-Bereich</strong><br /> Cookie-Name<br /> Wert der Bestätigung der Cookie-Information (true oder false)<br /> Session-ID<br /> Hostname<br /> Gültigkeitsdauer des Cookies beträgt 24 Minuten<br /> <span style="color: darkred; font-weight: bold;">Es findet keine personenbezogene Zuordnung statt.</span><br /><br />4. <strong>Cookies, die eine Analyse des Surfverhaltens der Nutzer ermöglichen</strong><br /> Eingegebene Suchbegriffe<br /> Häufigkeit von Seitenaufrufen<br /> Inanspruchnahme von Website-Funktionen<br /> <span style="color: darkred; font-weight: bold;">Es findet keine personenbezogene Zuordnung statt.</span></p>
						<h3><br />Server-Log-Dateien</h3>
						<p>Der Provider dieser Webseiten erhebt und speichert automatisch Informationen in so genannten Server-Log-Dateien, die Ihr Browser automatisch an uns übermittelt. Dies sind:</p>
						<ul>
						<li style="padding-left: 30px;">Browsertyp und Browserversion</li>
						<li style="padding-left: 30px;">verwendetes Betriebssystem</li>
						<li style="padding-left: 30px;">Referrer URL</li>
						<li style="padding-left: 30px;">Uhrzeit der Serveranfrage</li>
						<li style="padding-left: 30px;">IP-Adresse (V4, V6)<br />Wir verwenden auf dieser Webseite die Funktion IP-Anonymisierung. Dadurch wird Ihre IP-Adresse gekürzt gespeichert.</li>
						</ul>
						<p><span style="color: darkred; font-weight: bold;">Eine Zusammenführung dieser Daten mit anderen Datenquellen wird nicht vorgenommen. Es ist keine personenbezogene Zuordnung möglich.</span><br /><br />Grundlage für die Datenverarbeitung ist Art. 6 Abs. 1 lit. b DSGVO, der die Verarbeitung von Daten zur Erfüllung eines Vertrags oder vorvertraglicher Maßnahmen gestattet.</p>
						<h3><br />Kontaktformular</h3>
						<p>Wenn Sie uns per Kontaktformular Anfragen zukommen lassen, werden Ihre Angaben aus dem Anfrageformular inklusive der von Ihnen dort angegebenen Kontaktdaten zwecks Bearbeitung der Anfrage und für den Fall von Anschlussfragen bei uns gespeichert. Diese Daten geben wir nicht ohne Ihre Einwilligung weiter.<br /><br />Die Verarbeitung der in das Kontaktformular eingegebenen Daten erfolgt somit ausschließlich auf Grundlage Ihrer Einwilligung (Art. 6 Abs. 1 lit. a DSGVO). Sie können diese Einwilligung jederzeit widerrufen. Dazu reicht eine formlose Mitteilung per E-Mail an uns. Bitte beachten Sie, dass E-Mails hin und wieder nicht ankommen. Falls Sie keine Rückmeldung von uns erhalten bitten wir Sie auf anderem Wege nachzufragen. Die Rechtmäßigkeit der bis zum Widerruf erfolgten Datenverarbeitungsvorgänge bleibt vom Widerruf unberührt.<br /><br />Die von Ihnen im Kontaktformular eingegebenen Daten verbleiben bei uns, bis Sie uns zur Löschung auffordern, Ihre Einwilligung zur Speicherung widerrufen oder der Zweck für die Datenspeicherung entfällt (z.B. nach abgeschlossener Bearbeitung Ihrer Anfrage). Zwingende gesetzliche Bestimmungen – insbesondere Aufbewahrungsfristen – bleiben unberührt.</p>
						<h3>Verarbeiten von Daten (Kunden- und Vertragsdaten)</h3>
						<p>Wir erheben, verarbeiten und nutzen personenbezogene Daten nur, soweit sie für die Begründung, inhaltliche Ausgestaltung oder Änderung des Rechtsverhältnisses erforderlich sind (Bestandsdaten). Dies erfolgt auf Grundlage von Art. 6 Abs. 1 lit. b DSGVO, der die Verarbeitung von Daten zur Erfüllung eines Vertrags oder vorvertraglicher Maßnahmen gestattet. Personenbezogene Daten über die Inanspruchnahme unserer Internetseiten (Nutzungsdaten) erheben, verarbeiten und nutzen wir nur, soweit dies erforderlich ist, um dem Nutzer die Inanspruchnahme des Dienstes zu ermöglichen oder abzurechnen.<br /><br />Die erhobenen Kundendaten werden nach Abschluss des Auftrags oder Beendigung der Geschäftsbeziehung gelöscht. Gesetzliche Aufbewahrungsfristen bleiben unberührt.</p>
						<h3>Datenübermittlung bei Vertragsschluss für Dienstleistungen und digitale Inhalte</h3>
						<p>Wir übermitteln personenbezogene Daten an Dritte nur dann, wenn dies im Rahmen der Vertragsabwicklung notwendig ist. Derzeit übermitteln wir je nach gewählter Zahlungsmethode die Daten an deas betreffende Kreditinstitut, sowie bei Domainregistrierungen an die zuständige Regsitry.<br /><br />Eine weitergehende Übermittlung der Daten erfolgt nicht bzw. nur dann, wenn Sie der Übermittlung ausdrücklich zugestimmt haben. Eine Weitergabe Ihrer Daten an Dritte ohne ausdrückliche Einwilligung, etwa zu Zwecken der Werbung, erfolgt nicht.<br /><br />Grundlage für die Datenverarbeitung ist Art. 6 Abs. 1 lit. b DSGVO, der die Verarbeitung von Daten zur Erfüllung eines Vertrags oder vorvertraglicher Maßnahmen gestattet.<br /><br /></p>
						<h1>5. Soziale Medien</h1>
						<h3>Datenschutzerklärung für die Nutzung von Facebook-Plugins (Like-Button)</h3>
							
						<p>Auf unseren Seiten sind Plugins des sozialen Netzwerks Facebook, Anbieter Facebook Inc., 1 Hacker Way, Menlo Park, California 94025, USA, integriert. Die Facebook-Plugins erkennen Sie an dem Facebook-Logo oder dem &#8222;Like-Button&#8220; (&#8222;Gefällt mir&#8220;) auf unserer Seite. Eine Übersicht über die Facebook-Plugins finden Sie hier: <a href="http://developers.facebook.com/docs/plugins/">http://developers.facebook.com/docs/plugins/</a>.</p>
						<p>Wenn Sie unsere Seiten besuchen, wird über das Plugin eine direkte Verbindung zwischen Ihrem Browser und dem Facebook-Server hergestellt. Facebook erhält dadurch die Information, dass Sie mit Ihrer IP-Adresse unsere Seite besucht haben. Wenn Sie den Facebook &#8222;Like-Button&#8220; anklicken während Sie in Ihrem Facebook-Account eingeloggt sind, können Sie die Inhalte unserer Seiten auf Ihrem Facebook-Profil verlinken. Dadurch kann Facebook den Besuch unserer Seiten Ihrem Benutzerkonto zuordnen. Wir weisen darauf hin, dass wir als Anbieter der Seiten keine Kenntnis vom Inhalt der übermittelten Daten sowie deren Nutzung durch Facebook erhalten. Weitere Informationen hierzu finden Sie in der Datenschutzerklärung von Facebook unter <a href="http://de-de.facebook.com/policy.php">http://de-de.facebook.com/policy.php</a>.</p>
						<p>Wenn Sie nicht wünschen, dass Facebook den Besuch unserer Seiten Ihrem Facebook-Nutzerkonto zuordnen kann, loggen Sie sich bitte aus Ihrem Facebook-Benutzerkonto aus.</p>
                        <h3>Datenschutzerklärung für die Nutzung von Instagram</h3>
						<p>Auf unseren Seiten sind Funktionen des Dienstes Instagram eingebunden. Diese Funktionen werden angeboten durch die Instagram Inc., 1601 Willow Road, Menlo Park, CA, 94025, USA integriert. Wenn Sie in Ihrem Instagram-Account eingeloggt sind können Sie durch Anklicken des Instagram-Buttons die Inhalte unserer Seiten mit Ihrem Instagram-Profil verlinken. Dadurch kann Instagram den Besuch unserer Seiten Ihrem Benutzerkonto zuordnen. Wir weisen darauf hin, dass wir als Anbieter der Seiten keine Kenntnis vom Inhalt der übermittelten Daten sowie deren Nutzung durch Instagram erhalten.</p>
						<p>Weitere Informationen hierzu finden Sie in der Datenschutzerklärung von Instagram: <a href="http://instagram.com/about/legal/privacy/">http://instagram.com/about/legal/privacy/</a></p>
						<h3>Datenschutzerklärung für die Nutzung von Pinterest</h3>
						<p>Auf unserer Seite verwenden wir Social Plugins des sozialen Netzwerkes Pinterest, das von der Pinterest Inc., 808 Brannan Street San Francisco, CA 94103-490, USA (&#8222;Pinterest&#8220;) betrieben wird. Wenn Sie eine Seite aufrufen, die ein solches Plugin enthält, stellt Ihr Browser eine direkte Verbindung zu den Servern von Pinterest her. Das Plugin übermittelt dabei Protokolldaten an den Server von Pinterest in die USA. Diese Protokolldaten enthalten möglicherweise Ihre IP-Adresse, die Adresse der besuchten Websites, die ebenfalls Pinterest-Funktionen enthalten, Art und Einstellungen des Browsers, Datum und Zeitpunkt der Anfrage, Ihre Verwendungsweise von Pinterest sowie Cookies.</p>
						<p>Weitere Informationen zu Zweck, Umfang und weiterer Verarbeitung und Nutzung der Daten durch Pinterest sowie Ihre diesbezüglichen Rechte und Möglichkeiten zum Schutz Ihrer Privatsphäre finden Sie in den den Datenschutzhinweisen von Pinterest: <a href="https://about.pinterest.com/de/privacy-policy">https://about.pinterest.com/de/privacy-policy</a></p>						
							
						<h1>6. Analyse Tools und Werbung</h1>
						<h3>Datenschutzerklärung für die Nutzung von Google Analytics</h3>
						<p>Diese Website nutzt Funktionen des Webanalysedienstes Google Analytics. Anbieter ist die Google Inc., 1600 Amphitheatre Parkway Mountain View, CA 94043, USA.</p>
						<p>Google Analytics verwendet so genannte &#8222;Cookies&#8220;. Das sind Textdateien, die auf Ihrem Computer gespeichert werden und die eine Analyse der Benutzung der Website durch Sie ermöglichen. Die durch den Cookie erzeugten Informationen über Ihre Benutzung dieser Website werden in der Regel an einen Server von Google in den USA übertragen und dort gespeichert.</p>
						<p>Mehr Informationen zum Umgang mit Nutzerdaten bei Google Analytics finden Sie in der Datenschutzerklärung von Google: <a href="https://support.google.com/analytics/answer/6004245?hl=de">https://support.google.com/analytics/answer/6004245?hl=de</a></p>
						<p><strong>Browser Plugin</strong></p>
						<p>Sie können die Speicherung der Cookies durch eine entsprechende Einstellung Ihrer Browser-Software verhindern; wir weisen Sie jedoch darauf hin, dass Sie in diesem Fall gegebenenfalls nicht sämtliche Funktionen dieser Website vollumfänglich werden nutzen können. Sie können darüber hinaus die Erfassung der durch den Cookie erzeugten und auf Ihre Nutzung der Website bezogenen Daten (inkl. Ihrer IP-Adresse) an Google sowie die Verarbeitung dieser Daten durch Google verhindern, indem Sie das unter dem folgenden Link verfügbare Browser-Plugin herunterladen und installieren: <a href="https://tools.google.com/dlpage/gaoptout?hl=de">https://tools.google.com/dlpage/gaoptout?hl=de</a></p>
						<p><strong>Widerspruch gegen Datenerfassung</strong></p>
						<p>Sie können die Erfassung Ihrer Daten durch Google Analytics verhindern, indem Sie auf folgenden Link klicken. Es wird ein Opt-Out-Cookie gesetzt, der die Erfassung Ihrer Daten bei zukünftigen Besuchen dieser Website verhindert: <a>Google Analytics deaktivieren</a></p>
							
						<h3>Newsletter</h3>
						<p>Auf Grundlage Ihrer ausdrücklich erteilten Einwilligung, übersenden wir Ihnen regelmäßig unseren Newsletter bzw. vergleichbare Informationen per E-Mail an Ihre angegebene E-Mail-Adresse.</p>
<p>Für den Empfang des Newsletters ist die Angabe Ihrer E-Mail-Adresse ausreichend. Bei der Anmeldung zum Bezug unseres Newsletters werden die von Ihnen angegebenen Daten ausschließlich für diesen Zweck verwendet. Abonnenten können auch über Umstände per E-Mail informiert werden, die für den Dienst oder die Registrierung relevant sind (Beispielsweise Änderungen des Newsletterangebots oder technische Gegebenheiten).</p>
<p>Für eine wirksame Registrierung benötigen wir eine valide E-Mail-Adresse. Um zu überprüfen, dass eine Anmeldung tatsächlich durch den Inhaber einer E-Mail-Adresse erfolgt, setzen wir das „Double-opt-in“-Verfahren ein. Hierzu protokollieren wir die Bestellung des Newsletters, den Versand einer Bestätigungsmail und den Eingang der hiermit angeforderten Antwort. Weitere Daten werden nicht erhoben. Die Daten werden ausschließlich für den Newsletterversand verwendet und nicht an Dritte weitergegeben.</p>
<p>Die Einwilligung zur Speicherung Ihrer persönlichen Daten und ihrer Nutzung für den Newsletterversand können Sie jederzeit widerrufen. In jedem Newsletter findet sich dazu ein entsprechender Link. Außerdem können Sie sich jederzeit auch direkt auf dieser Webseite abmelden oder uns Ihren entsprechenden Wunsch über die am Ende dieser Datenschutzhinweise angegebene Kontaktmöglichkeit mitteilen.</p>
						<br>
						<h1>7. Plugins und Tools</h1>						
						<h3>Google Maps</h3>
						Wir setzen auf unserer Seite die Komponente "Google Maps" der Firma Google Inc., 1600 Amphitheatre Parkway, Mountain View, CA 94043 USA, nachfolgend „Google“, ein.<br /><br />Bei jedem einzelnen Aufruf der Komponente "Google Maps" wird von Google ein Cookie gesetzt, um bei der Anzeige der Seite, auf der die Komponente "Google Maps" integriert ist, Nutzereinstellungen und -daten zu verarbeiten. Dieses Cookie wird im Regelfall nicht durch das Schließen des Browsers gelöscht, sondern läuft nach einer bestimmten Zeit ab, soweit es nicht von Ihnen zuvor manuell gelöscht wird.<br /><br />Wenn Sie mit dieser Verarbeitung Ihrer Daten nicht einverstanden sind, so besteht die Möglichkeit, den Service von "Google Maps" zu deaktivieren und auf diesem Weg die Übertragung von Daten an Google zu verhindern. Dazu müssen Sie die Java-Script-Funktion in Ihrem Browser deaktivieren. Wir weisen Sie jedoch darauf hin, dass Sie in diesem Fall die "Google Maps" nicht oder nur eingeschränkt nutzen können.<br /><br />Die Nutzung von "Google Maps" und der über "Google Maps" erlangten Informationen erfolgt gemäß den Google-Nutzungsbedingungen, siehe <a title="Infos zu den Google-Nutzungsbedingungen" href="http://www.google.de/intl/de/policies/terms/regional.html" target="_blank" rel="noopener noreferrer">http://www.google.de/intl/de/policies/terms/regional.html</a> sowie der zusätzlichen Geschäftsbedingungen für „Google Maps“ <a title="Infos zu den Geschäftsbedingungen für „Google Maps“" href="https://www.google.com/intl/de_de/help/terms_maps.html" target="_blank" rel="noopener noreferrer">https://www.google.com/intl/de_de/help/terms_maps.html</a>. <br /><br />						
						<h3>Youtube</h3>
						Auf unserer Webseite setzen wir Komponenten (Videos) des Unternehmens YouTube, LLC 901 Cherry Ave., 94066 San Bruno, CA, USA, einem Unternehmen der Google Inc., Amphitheatre Parkway, Mountain View, CA 94043, USA, ein.<br /><br />Hierbei nutzen wir die von YouTube zur Verfügung gestellte Option " - erweiterter Datenschutzmodus - ".<br /><br />Wenn Sie eine Seite aufrufen, die über ein eingebettetes Video verfügt, wird eine Verbindung zu den YouTube-Servern hergestellt und dabei der Inhalt durch Mitteilung an Ihren Browser auf der Internetseite dargestellt.<br /><br />Laut den Angaben von YouTube werden im " - erweiterten Datenschutzmodus -" nur Daten an den YouTube-Server übermittelt, insbesondere welche unserer Internetseiten Sie besucht haben, wenn Sie das Video anschauen. Sind Sie gleichzeitig bei YouTube eingeloggt, werden diese Informationen Ihrem Mitgliedskonto bei YouTube zugeordnet. Dies können Sie verhindern, indem Sie sich vor dem Besuch unserer Website von Ihrem Mitgliedskonto abmelden.<br /><br />Weitere Informationen zum Datenschutz von YouTube werden von Google unter dem folgenden Link bereitgestellt: <a title="Infos zum Datenschutz von YOUTUBE" href="https://www.google.de/intl/de/policies/privacy/" target="_blank" rel="noopener noreferrer">https://www.google.de/intl/de/policies/privacy/<br /><br /></a>
							
						<h1>8. Zahlungsanbieter</h1>
						<h3>PayPal</h3>
						<p>Auf unserer Website bieten wir u.a. die Bezahlung via PayPal an. Anbieter dieses Zahlungsdienstes ist die PayPal (Europe) S.à.r.l. et Cie, S.C.A., 22-24 Boulevard Royal, L-2449 Luxembourg (im Folgenden “PayPal”).</p>
						<p>Wenn Sie die Bezahlung via PayPal auswählen, werden die von Ihnen eingegebenen Zahlungsdaten an PayPal übermittelt.</p>
						<p>Die Übermittlung Ihrer Daten an PayPal erfolgt auf Grundlage von Art. 6 Abs. 1 lit. a DSGVO (Einwilligung) und Art. 6 Abs. 1 lit. b DSGVO (Verarbeitung zur Erfüllung eines Vertrags). Sie haben die Möglichkeit, Ihre Einwilligung zur Datenverarbeitung jederzeit zu widerrufen. Ein Widerruf wirkt sich auf die Wirksamkeit von in der Vergangenheit liegenden Datenverarbeitungsvorgängen nicht aus.</p>
						<h1>9. Automatische Entscheidungsfindung / Profiling</h1>
						<p>Eine automatische Entscheidungsfindung oder Profiling nehmen wir nicht vor.</p>
                        <h1>10. Ihre Rechte</h1>
						<h3>a) Auskunfts- und Bestätigungsrecht</h3>
						<p>Sie haben das Recht, jederzeit von uns unentgeltliche Auskunft sowie Bestätigung über die zu Ihrer Person gespeicherten personenbezogenen Daten und eine Kopie dieser Auskunft zu erhalten.</p>
						<h3>b) Berichtigungsrecht</h3>
						<p>Sie haben das Recht, die unverzügliche Berichtigung Sie betreffender unrichtiger personenbezogener Daten zu verlangen. Ferner steht Ihnen das Recht zu, unter Berücksichtigung der Zwecke der Verarbeitung, die Vervollständigung unvollständiger personenbezogener Daten — auch mittels einer ergänzenden Erklärung — zu verlangen.</p>
						<h3>c) Löschungsrechte</h3>
						<p>Sie haben das Recht, dass die sie betreffenden personenbezogenen Daten unverzüglich gelöscht werden, sofern einer der folgenden Gründe zutrifft und soweit die Verarbeitung nicht erforderlich ist:</p>
						<ul>
						<li>Die personenbezogenen Daten wurden für solche Zwecke erhoben oder auf sonstige Weise verarbeitet, für welche sie nicht mehr notwendig sind.</li>
						<li>Sie widerrufen ihre Einwilligung, auf die sich die Verarbeitung stützte und es fehlt an einer anderweitigen Rechtsgrundlage für die Verarbeitung.</li>
						<li>Sie legen gemäß Art. 21 Abs. 1 DS-GVO Widerspruch gegen die Verarbeitung ein, und es liegen keine vorrangigen berechtigten Gründe für die Verarbeitung vor, oder Sie legen gemäß Art. 21 Abs. 2 DS-GVO Widerspruch gegen die Verarbeitung ein.</li>
						<li>Die personenbezogenen Daten wurden unrechtmäßig verarbeitet.</li>
						<li>Die Löschung der personenbezogenen Daten ist zur Erfüllung einer rechtlichen Verpflichtung nach dem Unionsrecht oder dem Recht der Mitgliedstaaten erforderlich, dem wir unterliegen.</li>
						<li>Die personenbezogenen Daten wurden in Bezug auf angebotene Dienste der Informationsgesellschaft gemäß Art. 8 Abs. 1 DS-GVO erhoben.</li>
						</ul>
						<br>
						<h3>d) Recht auf Einschränkung der Verarbeitung</h3>
						<p>Sie haben das Recht, die Einschränkung der Verarbeitung zu verlangen, wenn eine der folgenden Voraussetzungen gegeben ist:</p>
						<ul>
						<li>Die Richtigkeit der personenbezogenen Daten wird von Ihnen bestritten, und zwar für eine Dauer, die es uns ermöglicht, die Richtigkeit der personenbezogenen Daten zu überprüfen.</li>
						<li>Die Verarbeitung ist unrechtmäßig, Sie lehnen die Löschung der personenbezogenen Daten ab und verlangen stattdessen die Einschränkung der Nutzung der personenbezogenen Daten.</li>
						<li>Wir benötigen die personenbezogenen Daten für die Zwecke der Verarbeitung nicht länger, Sie benötigen sie jedoch zur Geltendmachung, Ausübung oder Verteidigung von Rechtsansprüchen.</li>
						<li>Sie haben Widerspruch gegen die Verarbeitung gem. Art. 21 Abs. 1 DS-GVO eingelegt und es steht noch nicht fest, ob unsere berechtigten Gründe gegenüber Ihren überwiegen.</li>
						</ul>
						<br>
						<h3>e) Widerspruchsrechte gegen die Verarbeitung</h3>
						<p>Sie haben das Recht, jederzeit gegen die Verarbeitung Sie betreffender personenbezogener Daten, die aufgrund von Art. 6 Abs. 1 Buchstaben e oder f DS-GVO erfolgt, Widerspruch einzulegen.<br />Wir verarbeiten die personenbezogenen Daten im Falle des Widerspruchs nicht mehr, es sei denn, wir können zwingende schutzwürdige Gründe für die Verarbeitung nachweisen, die gegenüber Ihren Interessen, Rechten und Freiheiten überwiegen, oder die Verarbeitung dient der Geltendmachung, Ausübung oder Verteidigung von Rechtsansprüchen.<br />Sie haben das Recht, jederzeit Widerspruch gegen die Verarbeitung der personenbezogenen Daten zum Zwecke von Direktwerbung einzulegen.</p>
						<h3>f) Recht auf Datenübertragbarkeit</h3>
						<p>Sie haben das Recht, die sie betreffenden personenbezogenen Daten, welche uns bereitgestellt wurden, in einem strukturierten, gängigem und maschinenlesbarem Format zu erhalten. Sie haben außerdem das Recht, diese Daten einem anderen Verantwortlichen ohne Behinderung durch uns, zu übermitteln, sofern die Verarbeitung auf der Einwilligung gemäß Art. 6 Abs. 1 Buchstabe a DS-GVO oder Art. 9 Abs. 2 Buchstabe a DS-GVO oder auf einem Vertrag gemäß Art. 6 Abs. 1 Buchstabe b DS-GVO beruht und die Verarbeitung mithilfe automatisierter Verfahren erfolgt, sofern die Verarbeitung nicht für die Wahrnehmung einer Aufgabe erforderlich ist, die im öffentlichen Interesse liegt oder in Ausübung öffentlicher Gewalt erfolgt, welche dem Verantwortlichen übertragen wurde.<br />Ferner haben Sie bei der Ausübung ihres Rechts auf Datenübertragbarkeit gemäß Art. 20 Abs. 1 DS-GVO das Recht, zu erwirken, dass die personenbezogenen Daten direkt von einem Verantwortlichen an einen anderen Verantwortlichen übermittelt werden, soweit dies technisch machbar ist und sofern hiervon nicht die Rechte und Freiheiten anderer Personen beeinträchtigt werden.</p>
						<h3>g) Recht auf Widerruf einer datenschutzrechtlichen Einwilligung</h3>
						<p>Sie haben das Recht die Einwilligung zur Verarbeitung personenbezogener Daten jederzeit zu widerrufen. Viele Datenverarbeitungsvorgänge sind nur mit Ihrer ausdrücklichen Einwilligung möglich. Sie können eine bereits erteilte Einwilligung jederzeit widerrufen. Dazu reicht eine formlose Mitteilung per E-Mail an uns. Bitte beachten Sie, dass E-Mails hin und wieder nicht ankommen. Falls Sie keine Rückmeldung von uns erhalten bitten wir Sie auf anderem Wege nachzufragen. Die Rechtmäßigkeit der bis zum Widerruf erfolgten Datenverarbeitung bleibt vom Widerruf unberührt. Die Datenverarbeitung hängt in den meisten Fällen mit der Möglichkeit der Vertragserfüllung zusammen, so dass bei Widerrufdie entsprechenden Dienste nicht mehr genutzt und die betroffenen Leistungen nicht mehr erbracht werden können.</p>
						<h3>h) Beschwerderecht bei der Aufsichtsbehörde</h3>
						<p>Im Falle datenschutzrechtlicher Verstöße steht dem Betroffenen ein Beschwerderecht bei der zuständigen Aufsichtsbehörde zu. Zuständige Aufsichtsbehörde in datenschutzrechtlichen Fragen ist der Landesdatenschutzbeauftragte des Bundeslandes, in dem unser Unternehmen seinen Sitz hat. Eine Liste der Datenschutzbeauftragten sowie deren Kontaktdaten können folgendem Link entnommen werden: <a title="Kontakt zum Landesdatenschutzbeauftragten" href="https://www.bfdi.bund.de/DE/Infothek/Anschriften_Links/anschriften_links-node.html" target="_blank" rel="noopener noreferrer">https://www.bfdi.bund.de/DE/Infothek/Anschriften_Links/anschriften_links-node.html</a>.</p>
						<h1><br />11. Gesetzliche oder vertragliche Vorschriften zur Bereitstellung personenbezogener Daten, Erforderlichkeit für den Vertragsschluss, Verpflichtung die personenbezogenen Daten bereitzustellen, mögliche Folgen der Nichtbereitstellung</h1>
						<p>Die Bereitstellung personenbezogener Daten kann zum Teil gesetzlich vorgeschrieben sein (z.B. Steuervorschriften) oder sich auch aus vertraglichen Regelungen (z.B. Angaben zum Vertragspartner) ergeben. Mitunter kann es zu einem Vertragsschluss erforderlich sein, dass Sie uns personenbezogene Daten zur Verfügung stellen, die in der Folge durch uns verarbeitet werden müssen. Sie sind beispielsweise verpflichtet, uns personenbezogene Daten bereitzustellen, wenn wir mit Ihnen einen Vertrag abschließen. Eine Nichtbereitstellung der personenbezogenen Daten hätte zur Folge, dass der Vertrag nicht geschlossen werden könnte.</p>
                        <h1>12. Widerspruch bzgl. Werbespam</h1>
						<p>Der Nutzung von im Rahmen der Impressumspflicht veröffentlichten Kontaktdaten zur Übersendung von nicht ausdrücklich angeforderter Werbung und Informationsmaterialien wird hiermit widersprochen.</p>
                        <p>Wir behalten uns rechtliche Schritte gegen die unerwünschte und unverlangte Zusendung von Werbematerial vor. Dies gilt insbesondere für sogenannte Spam-E-Mails, Spam-Briefe und Spam-Faxe. Wir weisen darauf hin, dass die unautorisierte Übermittlung von Werbematerial sowohl wettbewerbsrechtliche, zivilrechtliche und strafrechtliche Tatbestände berühren kann. Speziell Spam-E-Mails und Spam-Faxe können zu hohen Schadensersatzforderungen führen, wenn sie den Geschäftsbetrieb durch Überfüllung von Postfächern oder Faxgeräten stören.</p>  
                        
                        <h2>Änderung unserer Datenschutzbestimmungen</h2>
                        <p>Wir behalten uns vor, diese Datenschutzerklärung anzupassen, damit sie stets den aktuellen rechtlichen Anforderungen entspricht oder um Änderungen unserer Leistungen in der Datenschutzerklärung umzusetzen, z.B. bei der Einführung neuer Services. Für Ihren erneuten Besuch gilt dann die neue Datenschutzerklärung.</p>                      
                </div>
            </div>
        </div>
    </section>
<?php get_footer();?>

