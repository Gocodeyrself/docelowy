{*
* 2016 Sensbit
*
* MODUŁ ZOSTAŁ UDOSTĘPNIONY NA PODSTAWIE LICENCJI NA JEDNO STANOWISKO/DOMENĘ
* NIE MASZ PRAWA DO JEGO KOPIOWANIA, EDYTOWANIA I SPRZEDAWANIA
* W PRZYPADKU PYTAŃ LUB BŁĘDÓW SKONTAKTUJ SIĘ Z AUTOREM
*
* ENGLISH:
* MODULE IS LICENCED FOR ONE-SITE / DOMAIM
* YOU ARE NOT ALLOWED TO COPY, EDIT OR SALE
* IN CASE OF ANY QUESTIONS CONTACT AUTHOR
*
* ** ** ** ** ** ** ** ** ** ** ** ** ** ** ** ** ** ** ** ** ** *
*
* EN: ODWIEDŹ NASZ SKLEP PO WIĘCEJ PROFESJONALNYCH MODUŁÓW PRESTASHOP
* PL: VISIT OUR ONLINE SHOP FOR MORE PROFESSIONAL PRESTASHOP MODULES
* HTTPS://sensbit.pl
*
* ** ** ** ** ** ** ** ** ** ** ** ** ** ** ** ** ** ** ** ** ** *
*
* @author    Tomasz Dacka (kontakt@sensbit.pl)
* @copyright 2016 sensbit.pl
* @license   One-site license (jednostanowiskowa, bez możliwości kopiowania i udostępniania innym)
*}

<script>
	$(function () {
		if ($.fn.fancybox) {
			$('.fbox').fancybox({
				type: 'iframe',
				width: 1200,
				height: 600,
				helpers: {
					overlay: {
						locked: false
					}
				}
			});
			$('.fbox-s').fancybox({
				type: 'iframe',
				width: 600,
				height: 600,
				helpers: {
					overlay: {
						locked: false
					}
				}
			});
		}

	{if $update}
		sensbitgls.update();
	{/if}
	});
</script>

<div class="panel">
	<div style="display:inline-block">
		<a target="_blank" href="https://sensbit.pl/moduly-i-modyfikacje-prestashop/integracje-z-przewoznikami-prestashop/43-integracja-z-gls-dla-prestashop-15-16-i-17?r=sensbit"><img src="https://sensbit.pl/158-home_default/integracja-z-gls-dla-prestashop-15-16-i-17.jpg"/></a>
	</div>
	<div style="display:inline-block">
		<h2 style="font-weight: bold;text-shadow: none;color: #1f324e;">{$module->displayName} ({$module->name}) v. {$module->version}</h2>
		<div style="display:inline-block;vertical-align: middle;">
			<p style="font-size:14px;">
				<strong style="color:#305a01;">Licencja ważna {$license_time}</strong>
			</p>

			<strong>PHP</strong>: v. {phpversion()}<br/>
			<strong>PrestaShop</strong>: v. {$smarty.const._PS_VERSION_}<br/><br/>
			{if isset($services)}
				<strong>Usługi</strong>:<br/>
				<ul>
					{foreach $services as $s}
						<li style="color:{if $s['available']}#305a01{else}#a20101{/if};">{$s['name']} <i class='{if $s['available']}icon-check{else}icon-remove{/if}'></i></li>
						{/foreach}
				</ul>
				<br/>
			{/if}
			<a class="btn btn-info" href="https://sensbit.pl/instrukcja/{$module->name}" target="_blank"><i class="icon-file-text-alt"></i> Instrukcja obsługi</a>
			<a class="btn" href="https://sensbit.pl/moje-moduly" target="_blank"><i class="icon-download "></i> Pobierz aktualną wersję</a><br/><br/>
			<a class="btn btn-default btn-xs fbox" href="https://sensbit.pl/cms/20-jak-zaktualizowac-moduly-od-sensbit?content_only=1"><i class="icon-question-sign"></i> Jak zaktualizować moduł?</a>
			{if isset($services)}
				<a class="btn btn-default btn-xs fbox" href="https://sensbit.pl/cms/27-jak-odblokowac-uslugi-w-modulach-od-sensbit?content_only=1"><i class="icon-question-sign"></i> Jak odblokować nieaktywne usługi?</a>
			{/if}
		</div>
	</div> 
	<div style='display:inline-block'>
		<a style='vertical-align: middle;display: inline-block;' target="_blank" href="https://sensbit.pl/moje-moduly?utm_source=module_{$module->name}&utm_medium=version&utm_content={$module->name}&utm_campaign=Odwiedziny%20z%20modu%C5%82%C3%B3w"><img src="https://sensbit.pl/version?m={$module->name}&v={$module->version}&r={time()}" class="img-responsive"/></a>
	</div>
</div>

<div class="panel alert-info">
	<h2>Integracja z kurierem GLS. Ważne informacje!</h2>
	<p>Oddaje w Państwa ręce potężne narzędzie integrujące Państwa sklep z kurierem GLS.</p>
	<p>Moduł umożliwia sprawne generowanie etykiet oraz potwierdzeń nadania za pośrednictwem dosłownie kilku kliknięć myszką.</p>
	<p>Proszę śmiało testować moduł na danych testowych, a jeśli zauważą Państwo jakiś problem lub braki w module to proszę o kontakt.</p>
	<p>Jestem zawsze otwarty na wszelkie propozycje zmian czy dodatków do modułu.</p>
	<p><strong>Do poprawnego działania modułu potrzebne są Państwa dane logowania do API GLS ADE: login oraz hasło. Nie są to dane do logowania do panelu ADE PLUS!</strong></p>
	<p>Jeśli chcesz moduł przetestować bez ponoszenia żadnych kosztów, proszę o kontakt z GLS w celu otrzymania konta testowego.</p>
	<p>Po wprowadzeniu poprawnych danych, proszę przejrzeć wszystkie dodtkowe zakładki w konfiguracji i je uzupełnić.</p>
	<p>Dodawanie przesyłek odbywa się w podglądzie danego zamówienia lub na liście masowego dodawania zamówień w zakładce GLS > Zamówienia.</p>
	<p>Przed dodaniem przesyłek musisz skonfigurować szablony przesyłek według swoich upodobań <a href="{$link_template}">tutaj</a>.</p>
	<p>Jeśli chcesz zawsze możesz przejrzeć listę stworzonych przez Ciebie przesyłek <a href="{$link_shipments}">tutaj</a>.</p>
	<p>W przypadku pytań lub wątpliwości proszę o wiadomość na adres kontakt@sensbit.pl</p>
</div>

<div class="panel">
	<h2>Pierwsze uruchomienie modułu</h2>
	<p>Po świeżej instalacji modułu prosimy wykonać następujące kroki by moduł działał poprawnie:</p>
	<ol style='list-style: decimal;'>
		<li><strong>Dokończenie poniżej konfiguracji</strong><br/>
			Wprowadzamy przede wszystkim nasze unikalne dane logowania do systemów API GLS oraz wskazujemy modułowi sposób w jaki ma się zachowywać później.<br/>
			Prosimy przejrzeć wszystkie dostępne opcje łącznie ze wszystkimi zakładkami.</li>
		<li><strong>Stworzenie nowych przewoźników w sklepie dla przesyłek krajowych, zagranicznych i punktów odbiorów.</strong><br/>
			Jeśli chcą Państwo oferować również pobrania to zalecamy stworzenie dodatkowych przewoźników osobno dla pobrań.<br/>
			Jeśli interesuje Państwa tylko przesyłka krajowa to nie trzeba tworzyć przewoźników dla przesyłki zagranicznej i do punktów odbioru.</li>
		<li><strong>Stworzenie szablonów przesyłek.</strong><br/>
			Szablonem przesyłki można nazwać zbiór domyślnych ustawień dla danej przesyłki, którą wysyłają Państwo fizycznie w sklepie.<br/>
			Dany szablon powiązujemy ze stworzonym przez nas przewoźnikiem oraz metodą płatności tak, że później moduł sam będzie sugerował dany szablon dla danego zamówienia.</li>
		<li><strong>Automatyczne aktualizacje danych modułu</strong><br/>
			Prosimy uruchomić zadanie CRON opisane poniżej w celu uzupełnienia brakujących danych w module.<br/>
			Najlepiej też ustawić zadanie w CRONie na serwerze, by ten uruchamiał je cyklycznie np. 4/6 razy na dobę. Zadanie aktualizuje statusy, waluty i informacje o punktach odbioru przesyłek.</li>
		<li><strong>Dodaj przesyłkę do zamówienia</strong><br/>
			W tym momencie moduł masz już skonfigurowany w 99%, ten 1% to poprawki, których dokonasz by korzystać z modułu jeszcze wydajniej i szybciej.<br/>
			Stwórz przesyłkę w podglądzie danego zamówienia albo skorzystaj z naszego panelu masowego dodawania przesyłek GLS > Zamówienia, gdzie jednym kliknięciem dodasz wkrótce kilka-kilkanaście przesyłek od razu.</li>
		<li><strong>Oznacz przesyłki pobranymi etykietami</strong><br/>
			Po stworzeniu przesyłek masz możliwość od razu pobrania etykiet.<br/>
			Ciekawostką dla Ciebie może być fakt, że stworzyliśmy system pobierania i generowania etykiet w jednym pliku, tak by praca przebiegała jeszcze szybciej i przyjemniej.</li>
		<li><strong>Stwórz potwierdzenie nadania dla utworzonych przesyłek</strong><br/>
			W zakładce GLS > Przesyłki do nadania utwórz potwierdzenie nadania dla wybranych przesyłek i przekaż kurierowi przesyłki wraz z tym dokumentem.</li>
		<li><strong>Przyjmuj zamówienia i oceń moduł</strong><br/>
			Zachęcamy do korzystania z modułu do nadawania przesyłek gdyż został stworzony tak by faktycznie uprościć i ukrócić czas potrzebny na obsługę przesyłek.<br/>
			Gdyby mieli Państwo jakieś pytania bądź sugestie, która mogłaby jeszcze bardziej usprawnić działanie modułu zachęcamy do kontaktu z autorem, którego dane wyświetlają się poniżej.<br/>
			Po wyrobieniu swojej opinii zachęcamy do publicznego jej ujawnienia na naszej stronie sensbit.pl. Po zalogowaniu w strefie klienta możesz ocenić moduł i pomóc innym w wyborze.
		</li>
	</ol>
</div>

<div class="panel">
	<h2>CRON</h2>
	<p>W trosce o dostarczanie najlepszej jakości usług pobieramy zawsze aktualną listę punktów odbioru, która używana jest do szybkiej wyszukiwarki punktu odbioru klienta w koszyku</p>
	<p>Aktualizacja przebiega w tle podczas wchodzenia w konfigurację naszego modułu. Jeśli jednak nie chcesz często tu zaglądać, ustaw automatyczne zadanie CRON na serwerze korzystając z poniższego linku:</p>
	<p><strong>Zmiany od v1.2.0:</strong></p>
	<p>Po aktualizacji do wersji 1.2.0 podczas zadania CRON następuje również aktualizacja statusów przesyłek. Sprawdzane są przesyłki o statusie, który posiada włączoną opcję automatycznego sprawdzania statusu.</p>
	<a href="{$cron_update}" target="_blank">{$cron_update}</a>
	<p><em><i class="icon-info-circle"></i> Czy wiesz, że nasz system aktualizacji danych posiada sprytny mechanizm uniemożliwiający chwilowy brak danych w bazie podczas aktualizacji? ;)</em></p>
</div>