# Brandbook — MS Muurprint

> **Hoe je dit bestand gebruikt (lees mij eerst)**
> Dit is de single source of truth voor de visuele identiteit en tone of voice van het merk **MS**. Drop dit bestand in de root van je project (bijv. als `BRANDBOOK.md` of in een `/docs` map) en verwijs ernaar wanneer je Claude Code vraagt om een website, presentatie, social post, offerte-template of UI te bouwen. De design tokens onderaan (§9) zijn copy-paste-klaar — gebruik die als de bron voor kleuren, typografie en spacing in plaats van losse waardes te verzinnen.
>
> ⚠️ **In te vullen:** de volledige bedrijfsnaam achter "MS" is nog niet bekend in de aangeleverde stukken. Overal waar `[Bedrijfsnaam]` staat moet de officiële naam komen. "MS" wordt in dit document gebruikt als de merkafkorting / het beeldmerk.

---

## 1. Het merk in het kort

**MS** print afbeeldingen en designs **direct op de muur** — binnen én buiten — met een mobiele UV-LED printrobot op een railsysteem. Geen behang, geen naden, geen loslatende hoekjes: het resultaat ziet eruit alsof de afbeelding onderdeel is van de muur zelf.

| | |
|---|---|
| **Wat we doen** | Direct-op-muur printen op locatie met een printrobot |
| **Voor wie** | Particulieren (interieur) en bedrijven (logo's, wide-format wanden) |
| **Hoe** | UV-LED technologie, railsysteem, naadloze wide-format prints |
| **Waarom het bijzonder is** | Naadloos, jarenlang UV-bestendig, exclusiever en strakker dan behang |
| **Service** | Locatiebezoek/foto-analyse → offerte → schoon werken op afspraak |

### Merkbelofte (kies/finetune één)
- "Direct op de muur. Jarenlang scherp."
- "Jouw muur, ons canvas."
- "Geen behang. Geen naden. Gewoon jouw beeld."

> Deze taglines zijn voorstellen op basis van de merkwaarden — leg de definitieve keuze vast en gebruik die consequent.

### Kernwaarden
1. **Vakmanschap & precisie** — technische bestandscontrole, hoge resolutie (min. 300 dpi op werkelijk formaat), strak resultaat.
2. **Duurzaamheid** — UV-bestendige inkt die jarenlang levendig blijft, direct droog en uitgehard.
3. **Naadloos & exclusief** — één strak geheel, ook over oppervlakken breder dan de printer.
4. **Schoon & zorgeloos** — netjes werken, vloer afdekken, geen "schilderklaar" gedoe voor de klant.
5. **Innovatie** — printrobot, railsysteem, wide-format: techniek die het ambacht mogelijk maakt.

---

## 2. Het logo

Het beeldmerk combineert drie elementen die samen het hele verhaal vertellen:

- **De printrobot** (boven) — de machine/techniek, uitgevoerd in **brons/goud** als teken van precisie en kwaliteit.
- **De vier CMYK-inktstromen** — cyaan, magenta, geel en zwart die uit de printkoppen vloeien. Dit is hét herkenbare, dynamische element van het merk.
- **De "MS" letters** — gevormd uit het zwarte (Key) inktspoor, wat letterlijk laat zien dat de letters *geprint* zijn.

De inktstromen mogen nooit als los decoratief patroon worden gebruikt zonder context; ze horen visueel "uit" iets te stromen (printkop, balk, beeldrand) zodat de print-metafoor klopt.

### 2.1 Logovarianten (aan te leveren als set)
Houd minimaal deze versies beschikbaar in `/brand/logo/`:

| Variant | Gebruik |
|---|---|
| **Primair — full lockup** | Robot + MS + inktstromen. Standaard, op lichte achtergrond. |
| **Monogram MS** | Alleen de letters met inkt-accent. Voor favicon, app-icoon, social avatar, stempel. |
| **Robot-icoon** | Alleen het machine-element. Voor kleine toepassingen / watermerk. |
| **Mono zwart** | Eén kleur (`#27282A`) voor fax/gravure/eenkleurdruk. |
| **Mono wit (negatief)** | Voor donkere achtergronden — inktstromen behouden, rest wit. |

Lever elke variant aan als **SVG** (web) + **PNG met transparante achtergrond** (≥ 2000 px) + **PDF/EPS** (drukwerk).

### 2.2 Beschermde ruimte (clear space)
Houd rondom het logo minimaal een ruimte vrij ter grootte van de **hoogte van de letter "M"** (= 1× M). Plaats geen tekst, beeld of randen binnen die zone.

### 2.3 Minimumformaat
- **Full lockup:** min. **40 mm** breed (print) / **160 px** breed (digitaal).
- **Monogram MS:** min. **16 px** (favicon-niveau).
Onder deze maten: schakel over naar het monogram of robot-icoon.

### 2.4 Achtergronden
- Voorkeur: **wit** of **wand-wit** (`#F7F6F3`) — daar komen de inktstromen het best tot hun recht.
- Op donkere achtergronden: gebruik de **negatieve variant** (witte robot/letters, gekleurde inkt blijft).
- Vermijd drukke foto-achtergronden achter het logo; gebruik anders een effen vlak of voldoende contrast.

### 2.5 Wat je NOOIT doet met het logo
- ❌ De CMYK-inktkleuren vervangen of omwisselen.
- ❌ Het logo uitrekken, samendrukken of scheef zetten.
- ❌ Schaduwen, gloed, outlines of verlopen toevoegen.
- ❌ De robot, letters en inktstromen los uit elkaar trekken of herschikken.
- ❌ Het logo roteren of de inktstromen "omhoog" laten lopen (inkt vloeit naar beneden/uit).
- ❌ Op een achtergrond met te weinig contrast plaatsen.

---

## 3. Kleurenpalet

Het palet is letterlijk de inkt van het merk: **CMYK als hoofdkleuren**, **brons/goud** als techniek-accent en een rustig neutraal fundament dat aan een schone muur doet denken.

### 3.1 Primair — de inkt (CMYK)

| Naam | HEX | RGB | CMYK | Rol |
|---|---|---|---|---|
| **Cyaan** | `#0B96C9` | 11, 150, 201 | 95 / 25 / 0 / 21 | Inkt-accent, links, highlights |
| **Magenta** | `#DD046C` | 221, 4, 108 | 0 / 98 / 51 / 13 | Inkt-accent, call-to-action, energie |
| **Geel** | `#F9C636` | 249, 198, 54 | 0 / 20 / 78 / 2 | Inkt-accent, markeringen (nooit als tekst op wit) |
| **Inkt-Zwart (Key)** | `#27282A` | 39, 40, 42 | 7 / 5 / 0 / 84 | Hoofdtekst, het "MS" spoor, basis |

> De vier inktkleuren zijn de signatuur. Gebruik ze zelden alle vier tegelijk in vlakken — kies één à twee als accent per compositie, met inkt-zwart als anker. De volle CMYK-combinatie is voorbehouden aan het logo en aan momenten waar je het printproces expliciet wilt vieren.

### 3.2 Accent — de techniek

| Naam | HEX | RGB | CMYK | Rol |
|---|---|---|---|---|
| **Brons / Goud** | `#D4B379` | 212, 179, 121 | 0 / 16 / 43 / 17 | Premium-accent, "vakmanschap", iconen, fijne details |

Gebruik brons spaarzaam en bewust — het staat voor precisie en kwaliteit (de robot). Combineert goed met inkt-zwart op wit.

### 3.3 Neutralen — de muur

| Naam | HEX | RGB | Rol |
|---|---|---|---|
| **Wit** | `#FFFFFF` | 255, 255, 255 | Schoon oppervlak, cards |
| **Wand-Wit** | `#F7F6F3` | 247, 246, 243 | Achtergrond / canvas (subtiel warm) |
| **Lijn-Grijs** | `#E7E5E0` | 231, 229, 224 | Randen, scheidingslijnen, dividers |
| **Beton-Grijs** | `#9A9893` | 154, 152, 147 | Subtiele tekst, captions, placeholders |
| **Inkt-Zwart** | `#27282A` | 39, 40, 42 | Tekst & UI-basis |

### 3.4 Kleurverhouding (richtlijn)
Een rustige basis met inkt als accent. Vuistregel **60 / 30 / 10**:
- **60%** neutraal (wand-wit / wit)
- **30%** inkt-zwart (tekst, structuur)
- **10%** inktkleur(en) + brons als accent

### 3.5 Toegankelijkheid (belangrijk)
- **Tekst:** gebruik **inkt-zwart op wit/wand-wit** voor body copy (ruim voldoende contrast, WCAG AA/AAA).
- **Cyaan & magenta:** geschikt als accent en voor grote koppen/UI-elementen, **niet** voor lange platte tekst op wit (contrast net rond de grens).
- **Geel:** **nooit** als tekst op wit of licht — alleen als vlak/markering met donkere tekst eroverheen.
- Knoppen met inktkleur als vulling: gebruik **witte tekst** op magenta/cyaan en **inkt-zwarte tekst** op geel. Controleer altijd op ≥ 4.5:1 voor normale tekst.

---

## 4. Typografie

Geen wordmark-font is meegeleverd, dus hieronder een afgestemd systeem. De combinatie balanceert **techniek** (een strakke grotesque) met **leesbaarheid** en past bij het zelfverzekerde, precieze karakter van het logo. Alle fonts zijn gratis via Google Fonts — makkelijk te importeren in code.

| Rol | Font | Toepassing |
|---|---|---|
| **Display / Koppen** | **Space Grotesk** (700 / 500) | H1–H3, hero-tekst, het merkgevoel |
| **Body / UI** | **Inter** (400 / 500 / 600) | Lopende tekst, knoppen, formulieren |
| **Technisch / Labels** | **JetBrains Mono** (500) | Specs, dpi-/maatlabels, "machine"-accenten |

**Alternatief body-font:** *Manrope* (als je iets warmers wilt dan Inter).

### Typografische regels
- **Koppen:** Space Grotesk Bold, strak (letter-spacing `-0.02em` op grote maten), kort en krachtig.
- **Body:** Inter Regular, regelhoogte ~1.6, regellengte 60–75 tekens.
- **Hiërarchie via gewicht en grootte**, niet via kleur — houd tekst overwegend inkt-zwart.
- **Mono spaarzaam:** voor technische details (bijv. `300 dpi`, `230V`, `m²`) geeft het een herkenbaar "print/techniek"-tintje.
- **Hoofdletters:** vermijd VOLLEDIG KAPITAAL in lange koppen; klein-kapitaal/labels in mono mag.

### Type-schaal (web, rem)
`H1 3.0` · `H2 2.25` · `H3 1.5` · `H4 1.25` · `Body 1.0` · `Small 0.875` · `Caption 0.75`

---

## 5. Tone of voice

Afgeleid uit de FAQ: **professioneel, geruststellend en behulpzaam**, met zichtbare vakkennis en oprecht enthousiasme voor het ambacht.

| Wel | Niet |
|---|---|
| Helder en concreet ("ongeveer 1,5 tot 2 meter vrij") | Vaag of zwevend |
| Geruststellend ("zodat u nooit voor verrassingen komt te staan") | Bangmakend of overdreven verkoperig |
| Deskundig ("UV-LED technologie", "min. 300 dpi") | Jargon zonder uitleg |
| Enthousiast over kwaliteit ("Geen probleem!", "één strak geheel") | Vlak of ongeïnteresseerd |
| Meedenkend ("wij denken mee in de stijl van uw interieur") | Eenrichtingsverkeer |

### Aanspreekvorm
- **Klantcommunicatie (FAQ, offerte, e-mail, website-body):** **u-vorm**, formeel-vriendelijk — consistent met de bestaande FAQ.
- **Social media / campagne:** een iets lossere toon mag, maar houd het verzorgd. Leg per kanaal vast of je "u" of "je" gebruikt en wijk daar niet van af.

### Boodschap-pijlers (gebruik deze in copy)
1. **Naadloos** — "geen naden, geen luchtbellen, geen loslatende hoekjes."
2. **Duurzaam** — "jarenlang levendig, UV-bestendig, direct uitgehard."
3. **Zorgeloos** — "wij werken schoon en dekken de vloer af."
4. **Exclusief** — "ziet eruit alsof het onderdeel is van de muur."
5. **Op maat** — "een gespecificeerde offerte, geen verrassingen."

### Voorbeeld-microcopy
- CTA: **"Vraag een offerte aan"** / **"Plan een locatiebezoek"**
- Geruststelling onder een formulier: *"We controleren uw bestand altijd technisch voordat we printen."*
- Lege staat / 404: *"Deze muur is nog leeg — laten we daar iets aan doen."*

---

## 6. Beeldtaal & fotografie

Beeld moet de **kwaliteit, het naadloze resultaat en het proces** laten zien.

**Wel laten zien**
- Close-ups van scherpe, levendige prints (detail = bewijs van kwaliteit).
- De printrobot/het railsysteem in actie op locatie (techniek + ambacht).
- Voor/na van een muur, of het resultaat in een echt interieur.
- Schone, lichte ruimtes — passend bij "wij werken netjes".

**Vermijden**
- Rommelige of slecht belichte ruimtes.
- Stockfoto's die generiek of nep aanvoelen.
- Beelden die het printproces verkeerd voorstellen (bijv. behang-suggestie).

**Stijl**
- Natuurlijk licht, hoog contrast op de print zelf, rustige omgeving.
- CMYK-inkt mag terugkomen als subtiel grafisch accent (lijnen/strepen) over of naast foto's — maar nooit zo druk dat het de print overstemt.

---

## 7. Grafisch element: de inktstroom

Het herkenbaarste merkelement buiten het logo is de **CMYK-inktstroom**: vier vloeiende lijnen (cyaan, magenta, geel, zwart) die ergens uit lijken te stromen.

Toepassingen: als onderrand van een hero-sectie, als scheidingslijn tussen secties, langs de zijkant van een document, of als subtiel accent in een footer. Houd het **vloeiend en organisch** (geen rechte strepen), en laat de stroom altijd visueel "ergens vandaan" komen. Gebruik het met mate — één krachtig accent per pagina is sterker dan overal strepen.

---

## 8. Toepassingen (checklist)

- **Website:** wand-wit canvas, inkt-zwarte tekst, magenta of cyaan als primaire accent/CTA, inktstroom als sectie-accent, Space Grotesk koppen.
- **Offerte / facturen:** strak, inkt-zwart op wit, brons-accent voor headers, mono voor specs (m², dpi, datum). Toon "geen verrassingen" door duidelijke specificatie.
- **Social:** monogram als avatar; posts met veel wit, één inktkleur per post, resultaat-foto centraal.
- **Visitekaartje / drukwerk:** mat wit papier, full-color logo, eventueel een spot-UV of brons-folie accent (sluit aan bij "uitgehard/premium").
- **E-mailhandtekening:** monogram + `[Bedrijfsnaam]` + contact, één inkt-accentlijn.

---

## 9. Design tokens (copy-paste)

### 9.1 CSS custom properties

```css
:root {
  /* Inkt — primair (CMYK) */
  --ms-cyan:        #0B96C9;
  --ms-magenta:     #DD046C;
  --ms-yellow:      #F9C636;
  --ms-ink:         #27282A; /* Key / hoofdtekst */

  /* Accent — techniek */
  --ms-bronze:      #D4B379;

  /* Neutralen — de muur */
  --ms-white:       #FFFFFF;
  --ms-canvas:      #F7F6F3; /* wand-wit, pagina-achtergrond */
  --ms-line:        #E7E5E0; /* randen / dividers */
  --ms-muted:       #9A9893; /* subtiele tekst */

  /* Semantisch (mapping) */
  --color-bg:        var(--ms-canvas);
  --color-surface:   var(--ms-white);
  --color-text:      var(--ms-ink);
  --color-text-soft: #6B6A66;
  --color-border:    var(--ms-line);
  --color-primary:   var(--ms-magenta); /* hoofd-CTA */
  --color-secondary: var(--ms-cyan);
  --color-accent:    var(--ms-bronze);

  /* Typografie */
  --font-display: "Space Grotesk", system-ui, sans-serif;
  --font-body:    "Inter", system-ui, sans-serif;
  --font-mono:    "JetBrains Mono", ui-monospace, monospace;

  /* Type-schaal */
  --text-h1: 3rem;
  --text-h2: 2.25rem;
  --text-h3: 1.5rem;
  --text-h4: 1.25rem;
  --text-base: 1rem;
  --text-sm: 0.875rem;
  --text-xs: 0.75rem;

  /* Radius & spacing */
  --radius-sm: 6px;
  --radius-md: 12px;
  --radius-lg: 20px;
  --space-1: 4px;  --space-2: 8px;  --space-3: 12px;
  --space-4: 16px; --space-6: 24px; --space-8: 32px;
  --space-12: 48px; --space-16: 64px; --space-24: 96px;

  /* Schaduw (subtiel — schone muur) */
  --shadow-sm: 0 1px 2px rgba(39,40,42,0.06);
  --shadow-md: 0 6px 20px rgba(39,40,42,0.08);
}
```

### 9.2 Google Fonts import

```html
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=JetBrains+Mono:wght@500&family=Space+Grotesk:wght@500;700&display=swap" rel="stylesheet">
```

### 9.3 Tailwind config (v3)

```js
// tailwind.config.js
module.exports = {
  theme: {
    extend: {
      colors: {
        ink:     "#27282A",
        cyan:    "#0B96C9",
        magenta: "#DD046C",
        yellow:  "#F9C636",
        bronze:  "#D4B379",
        canvas:  "#F7F6F3",
        line:    "#E7E5E0",
        muted:   "#9A9893",
      },
      fontFamily: {
        display: ['"Space Grotesk"', "system-ui", "sans-serif"],
        body:    ['"Inter"', "system-ui", "sans-serif"],
        mono:    ['"JetBrains Mono"', "ui-monospace", "monospace"],
      },
      borderRadius: { sm: "6px", md: "12px", lg: "20px" },
      boxShadow: {
        sm: "0 1px 2px rgba(39,40,42,0.06)",
        md: "0 6px 20px rgba(39,40,42,0.08)",
      },
    },
  },
};
```

### 9.4 Design tokens (JSON, framework-agnostisch)

```json
{
  "color": {
    "ink": "#27282A",
    "cyan": "#0B96C9",
    "magenta": "#DD046C",
    "yellow": "#F9C636",
    "bronze": "#D4B379",
    "white": "#FFFFFF",
    "canvas": "#F7F6F3",
    "line": "#E7E5E0",
    "muted": "#9A9893"
  },
  "font": {
    "display": "Space Grotesk",
    "body": "Inter",
    "mono": "JetBrains Mono"
  }
}
```

---

## 10. Snelle do's & don'ts

**Do**
- Houd het rustig: veel wit, inkt-zwarte tekst, één inktkleur als accent.
- Laat kwaliteit zien via scherpe detail-foto's van echte prints.
- Gebruik mono voor technische specs — dat is on-brand.
- Schrijf geruststellend en concreet (u-vorm in klantcommunicatie).

**Don't**
- Niet alle vier de CMYK-kleuren tegelijk als grote vlakken inzetten.
- Geel niet als tekst op wit/licht gebruiken.
- Het logo niet vervormen, verkleuren of de inktstromen omdraaien.
- Geen generieke stockbeelden die het ambacht niet laten zien.

---

*Versie 1.0 — gegenereerd op basis van het MS-logo en de bestaande FAQ. Vul `[Bedrijfsnaam]`, de definitieve tagline en de aanspreekvorm per kanaal aan, en exporteer de logovarianten (§2.1) voordat je dit breed inzet.*
