# Visa kulturarrangemang

## Hur man använder Region Hallands plugin "region-halland-acf-page-kulturarrangemang"

Nedan följer instruktioner hur du kan använda pluginet "region-halland-acf-page-kulturarrangemang".


## Användningsområde

Denna plugin ger möjlighet att skapa poster med kulturarrangemang


## Licensmodell

Denna plugin använder licensmodell GPL-3.0. Du kan läsa mer om denna licensmodell via den medföljande filen:
```sh
LICENSE (https://github.com/RegionHalland/region-halland-acf-page-kulturarrangemang/blob/master/LICENSE)
```


## Installation och aktivering

```sh
A) Hämta pluginen via Git eller läs in det med Composer
B) Installera Region Hallands plugin i Wordpress plugin folder
C) Aktivera pluginet inifrån Wordpress admin
```


## Hämta hem pluginet via Git

```sh
git clone https://github.com/RegionHalland/region-halland-acf-page-kulturarrangemang.git
```


## Läs in pluginen via composer

Dessa två delar behöver du lägga in i din composer-fil

Repositories = var pluginen är lagrad, i detta fall på github

```sh
"repositories": [
  {
    "type": "vcs",
    "url": "https://github.com/RegionHalland/region-halland-acf-page-kulturarrangemang.git"
  },
],
```
Require = anger vilken version av pluginen du vill använda, i detta fall version 1.0.0

OBS! Justera så att du hämtar aktuell version.

```sh
"require": {
  "regionhalland/region-halland-acf-page-kulturarrangemang": "1.0.0"
},
```


## Visa allt innehåll via "Blade" på en sida

```sh
<ol>
  <li>Typ: {{ get_region_halland_acf_page_kulturarrangemang_type_name() }}</li>
  <li>Kategori: {{ get_region_halland_acf_page_kulturarrangemang_category_name() }}</li>
  <li>Subkategori: {{ get_region_halland_acf_page_kulturarrangemang_subcategory_name() }}</li>
  <li>Fullbokat: {{ get_region_halland_acf_page_kulturarrangemang_fullbokat() }}</li>
  <li>Tid: {{ get_region_halland_acf_page_kulturarrangemang_tid() }}</li>
  <li>Starttid: {{ get_region_halland_acf_page_kulturarrangemang_start_tid() }}</li>
  <li>Dag: {{ get_region_halland_acf_page_kulturarrangemang_start_tid_dag() }}</li>
  <li>Månad: {{ get_region_halland_acf_page_kulturarrangemang_start_tid_manad() }}</li>
  <li>Sluttid: {{ get_region_halland_acf_page_kulturarrangemang_slut_tid() }}</li>
  <li>Plats: {!! get_region_halland_acf_page_kulturarrangemang_plats() !!}</li>
  <li>Sista anmälningstid: {{ get_region_halland_acf_page_kulturarrangemang_sista_anmalningstid() }}</li>
  <li>Målgrupp: {{ get_region_halland_acf_page_kulturarrangemang_malgrupp() }}</li>
  <li>Entré: {!! get_region_halland_acf_page_kulturarrangemang_entre() !!}</li>
</ol>
```        

## Lista allt innehåll via "Blade" på en sida

```sh
@php($myItems = get_region_halland_acf_page_kulturarrangemang_items())
@foreach($myItems as $item)
  <h2>{{ $item->post_title }}</h2><br>
  <span>{{ $item->post_ingress }}</span><br><br>
  <span>{!! $item->post_content !!}</span><br><br>
  <span><strong>Typ:</strong> {{ $item->kultur_typ }}</span><br>
  <span><strong>Kategori:</strong> {{ $item->kultur_category }}</span><br>
  <span><strong>Subkategori:</strong> {{ $item->kultur_sub_category }}</span><br>
  <span><strong>Fullbokat:</strong> {{ $item->kultur_fullbokat }}</span><br>
  <span><strong>Tid:</strong> {{ $item->kultur_tid }}</span><br>
  <span><strong>Dag:</strong> {{ $item->kultur_start_tid_dag }}</span><br>
  <span><strong>Månad:</strong> {{ $item->kultur_start_tid_manad }}</span><br>
  <span><strong>Plats:</strong> {!! $item->kultur_plats !!}</span><br>
  <span><strong>Målgrupp:</strong> {{ $item->kultur_malgrupp }}</span><br><br>
  <span><strong>Entré:</strong> {!! $item->kultur_entre !!}</span><br>
@endforeach
```        


## Exempel på en array

```sh
array (size=2)
  0 => 
    object(WP_Post)[6648]
      public 'ID' => int 1997
      public 'post_author' => string '11' (length=2)
      public 'post_date' => string '2019-02-26 08:35:28' (length=19)
      public 'post_date_gmt' => string '2019-02-26 08:35:28' (length=19)
      public 'post_content' => string 'Poetry slam - deltävling i Hylte' (length=33)
      public 'post_title' => string 'Poetry slam i Hylte' (length=19)
      public 'post_excerpt' => string '' (length=0)
      public 'post_status' => string 'publish' (length=7)
      public 'comment_status' => string 'closed' (length=6)
      public 'ping_status' => string 'closed' (length=6)
      public 'post_password' => string '' (length=0)
      public 'post_name' => string 'poetry-slam-i-hylte' (length=19)
      public 'to_ping' => string '' (length=0)
      public 'pinged' => string '' (length=0)
      public 'post_modified' => string '2019-03-19 09:24:07' (length=19)
      public 'post_modified_gmt' => string '2019-03-19 09:24:07' (length=19)
      public 'post_content_filtered' => string '' (length=0)
      public 'post_parent' => int 0
      public 'guid' => string 'http://exempel.se/?post_type=kulturarrangemang&#038;p=1997' (length=56)
      public 'menu_order' => int 0
      public 'post_type' => string 'kulturarrangemang' (length=17)
      public 'post_mime_type' => string '' (length=0)
      public 'comment_count' => string '0' (length=1)
      public 'filter' => string 'raw' (length=3)
      public 'post_ingress' => string 'Min ingress' (length=11)
      public 'url' => string 'http://exempel.se/kulturarrangemang/poetry-slam-i-hylte/' (length=56)
      public 'image' => string '' (length=0)
      public 'image_url' => boolean false
      public 'date' => string '2019-02-26' (length=10)
      public 'kultur_typ' => string 'Arrangemang' (length=9)
      public 'kultur_category' => string 'Kultur' (length=6)
      public 'kultur_sub_category' => string 'Dans' (length=4)
      public 'kultur_fullbokat_int' => int 0
      public 'kultur_fullbokat' => string 'Nej' (length=3)
      public 'kultur_tid' => string 'Mellan klockan 17-19' (length=20)
      public 'kultur_plats' => string 'Folkbiblioteket, Hyltebruk.' (length=27)
      public 'kultur_malgrupp' => string 'Ingen åldersbegränsing! Det är fri entré.' (length=45)
  1 => 
    object(WP_Post)[6650]
      public 'ID' => int 1753
      public 'post_author' => string '1' (length=1)
      public 'post_date' => string '2019-02-22 13:54:09' (length=19)
      public 'post_date_gmt' => string '2019-02-22 13:54:09' (length=19)
      public 'post_content' => string 'Välkommen till Poetry Slam i Halmstad' (length=38)
      public 'post_title' => string 'Poetry slam i Halmstad' (length=22)
      public 'post_excerpt' => string '' (length=0)
      public 'post_status' => string 'publish' (length=7)
      public 'comment_status' => string 'closed' (length=6)
      public 'ping_status' => string 'closed' (length=6)
      public 'post_password' => string '' (length=0)
      public 'post_name' => string 'poetry-slam-i-halmstad' (length=22)
      public 'to_ping' => string '' (length=0)
      public 'pinged' => string '' (length=0)
      public 'post_modified' => string '2019-03-19 09:45:01' (length=19)
      public 'post_modified_gmt' => string '2019-03-19 09:45:01' (length=19)
      public 'post_content_filtered' => string '' (length=0)
      public 'post_parent' => int 0
      public 'guid' => string 'http://exempel.se/?post_type=kulturarrangemang&#038;p=1753' (length=56)
      public 'menu_order' => int 0
      public 'post_type' => string 'kulturarrangemang' (length=17)
      public 'post_mime_type' => string '' (length=0)
      public 'comment_count' => string '0' (length=1)
      public 'filter' => string 'raw' (length=3)
      public 'post_ingress' => string 'Alla är välkomna' (length=18)
      public 'url' => string 'http://exempel.se/kulturarrangemang/poetry-slam-i-halmstad/' (length=59)
      public 'image' => string '' (length=0)
      public 'image_url' => boolean false
      public 'date' => string '2019-02-22' (length=10)
      public 'kultur_typ' => string 'Arrangemang' (length=9)
      public 'kultur_category' => string 'Kultur' (length=6)
      public 'kultur_sub_category' => string 'Film' (length=4)
      public 'kultur_fullbokat_int' => int 0
      public 'kultur_fullbokat' => string 'Nej' (length=3)
      public 'kultur_tid' => string 'Hela kvällen' (length=13)
      public 'kultur_plats' => string 'Galgberget' (length=10)
      public 'kultur_malgrupp' => string 'Hela familjen' (length=13)
```        


## Versionhistorik

### 2.5.0
- Bifogat fil med licensmodell

### 2.4.0
- Uppdaterat information om licensmodell

### 2.3.0
- Entré är ändrad från textarea till texteditor

### 2.2.0
- Fler typer och möjlighet att välja en eller flera
- Fler underkategorier och möjlighet att välja en eller flera
- Plats är ändrad från textarea till texteditor
- Nytt fält Entré som textarea

### 2.1.1
- Justerat funktioner för tid och månad

### 2.1.0
- Tid och månad som egna fält i arrayen

### 2.0.0
- Bytt namn på hela pluginen inkl posttyp från kulturevenemang till kulturarrangemang
- Bytt ut alla funktionsnamn och ersatt evenemang med arrangemang
- Uppdaterat single- och archive- med nya funktionsnamn

### 1.2.0
- Nytt fält, fritext för tid
- Nytt fält, ingress som komplement till the_content
- Listning av kulturevenemang
- Uppdaterade vyer, både single- och archive-

### 1.1.1
- Uppdaterade arkiv-sidan

### 1.1.0
- Adderade has_archive = true för att kunnna ha en arkiv-sida

### 1.0.0
- Första version