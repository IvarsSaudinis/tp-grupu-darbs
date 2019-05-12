# Tīmekļa lietotņu programmēšana
## Grupu darbs

### Uzdevums
```text
Sistēma, kura ļauj elektroniski reģistrēties studijām:
-Ievades lauki
--Vārds
--Uzvārds
--Personas kods
--Studiju programma
--iespēja ievadīt 2 CE līmeņus
---Priekšmets1
---Līmenis1
---Priekšmets2
---Līmenis2
--Vidējā atzīme beidzot vidusskolu


Visi ievades lauki obligāti aizpildāmi. Pie datu nosūtīšanas programma pārbauda vai visi lauki ir aizpildīti.
Ja kāds lauks palicis neaizpildīts, programma izvada atbilstošu kļūdas paziņojumu.
Programma pieļauj vienam ilvēkam reģistrēties 2 studiju programmās (pārbaude pēc personas koda). 
Ja lietotājs mēģina reģistrēties trešai programmai, programma izvada atbilstošu kļūdas paziņojumu.
Pēc veiksmīgas lietotāja reģistrācijas tiek izvadīts paziņojums par veiksmīgu reģistrāciju.

Programmai jānodrošina iespēja pēc lietotāja reģistrācijas jebkurā brīdī ļaut lietotājam aplūkot aktuālāko informāciju 
par savu reģistrāciju (ar lietotāja autorizāciju vai un unikāla koda ievadi vai kādu citu veidu, kurš nodrošina pietiekamu datu aizsardzību.)
Aplūkojot savus reģistrācijas datus tiek izvadīta šāda informācija:
1) Datums, kurā reģistrējies
2) Studiju programma, kurā reģistrējies
3) Budžeta vietu skaits programmā
4) Pieteikumu skaits programmā
5) Uz tekošo brīdi lietotāja ranga numurs (kurš pēc kārtas uz tekošo brīdi ir lietotājs no visiem kuri reģistrējušies šai programmai.)
5.1.) Rangs veidojas pēc CE un to rezultātiem ar kādiem lietotājs reģistrējies (A-6punkti, B-5punkti utt.)
5.2.) Gadījumā ja diviem vai vairāk lietotājiem ir vienāds punktu skaits, augstāku vietu rangā ieņem tas, kuram augstāka vidējā atzīme beidzot vidusskolu.

```

### Programmatūras izstrādes gaita

Projekta komanda izlēma, ka jāizmanto kādu no populārākajiem php programmēšanas ietvariem, piemēram, Laravel un 
izskatam jāizmanto Bootstrap.

### Darāmo darbu saraksts

* ~~Būtu nepieciešams datubāzē saglabāt reģistrācijas reitinga datus. Lai vieglāk veiktu reitinga aprēķināšanu (kārtošanu) datubāzes līmenī~~
* ~~Nepieciešama ievades laukus, kur dalībnieks var ievadīt unikālo kodu un saņemt informācju par pieteikumu~~
* Spiežot uz pogas "Pieteikties vēl vienā programmā", nepieciešams aizvadīt uz daļēji aizpildītu formu
* Korekta studiju reitinga aprēķināšana
* Validēt pieteikumus un neļaut pieteikties vienam PK uz vairāk kā divām programmām

#### Pagaidu ekrānšāviņi

![Sākuma ekrāns](public/screens/1.png?raw=true "1")

![Validācijas aptivenais izskats](public/screens/2.png?raw=true "2")

![Statusa logs](public/screens/3.png?raw=true "3")
 
#### P.S.

Sistēmiņa izveidota uz Laravel 5.5 bāzes un korektu sistēmas uzstādīšanu droši vien ir iespējams lasīt ietvara dokumentācijā.

Tas ir, noklonē projektu, startē `composer install`, `cp .env.example .env`, aizpilda .env ar korektiem datiem, `php artisan key:generate` kā atslēgas ģenerātors, `php artisan migrate` kā datubāzes 
struktūras ģenerātors, `php artisan db:seed` kā datubāzes aizpildītājs (te gan katru klašu failu jāstartē atsevišķi, droši vien).
Ir iespējams izmantot Vagrant ar vienkāršo `vagrant up` komandu. 