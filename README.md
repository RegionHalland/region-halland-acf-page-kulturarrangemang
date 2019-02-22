# Visa kulturevenemang

## Hur man använder Region Hallands plugin "region-halland-acf-page-kulturevenemang"

Nedan följer instruktioner hur du kan använda pluginet "region-halland-acf-page-kulturevenemang".


## Användningsområde

Denna plugin ger möjlighet att skapa poster med kulturhändelser


## Installation och aktivering

```sh
A) Hämta pluginen via Git eller läs in det med Composer
B) Installera Region Hallands plugin i Wordpress plugin folder
C) Aktivera pluginet inifrån Wordpress admin
```


## Hämta hem pluginet via Git

```sh
git clone https://github.com/RegionHalland/region-halland-acf-page-kulturevenemang.git
```


## Läs in pluginen via composer

Dessa två delar behöver du lägga in i din composer-fil

Repositories = var pluginen är lagrad, i detta fall på github

```sh
"repositories": [
  {
    "type": "vcs",
    "url": "https://github.com/RegionHalland/region-halland-acf-page-kulturevenemang.git"
  },
],
```
Require = anger vilken version av pluginen du vill använda, i detta fall version 1.0.0

OBS! Justera så att du hämtar aktuell version.

```sh
"require": {
  "regionhalland/region-halland-acf-page-kulturevenemang": "1.0.0"
},
```


## Visa allt innehåll via "Blade" på en sida

```sh
<ol>
  <li>Typ: {{ get_region_halland_acf_page_kulturevenemang_type_name() }}</li>
  <li>Kategori: {{ get_region_halland_acf_page_kulturevenemang_category_name() }}</li>
  <li>Subkategori: {{ get_region_halland_acf_page_kulturevenemang_subcategory_name() }}</li>
  <li>Fullbokat: {{ get_region_halland_acf_page_kulturevenemang_fullbokat() }}</li>
  <li>Starttid: {{ get_region_halland_acf_page_kulturevenemang_start_tid() }}</li>
  <li>Sluttid: {{ get_region_halland_acf_page_kulturevenemang_slut_tid() }}</li>
  <li>Plats: {{ get_region_halland_acf_page_kulturevenemang_plats() }}</li>
  <li>Sista anmälningstid: {{ get_region_halland_acf_page_kulturevenemang_sista_anmalningstid() }}</li>
  <li>Målgrupp: {{ get_region_halland_acf_page_kulturevenemang_malgrupp() }}</li>
</ol>
```        


## Versionhistorik

### 1.0.0
- Första version