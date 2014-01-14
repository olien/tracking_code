Tracking Code AddOn für REDAXO 4
================================

Ein ganz simples AddOn mit welchem man einen Tracking-Code für Statistiksysteme wie z.B. Piwik komfortabel einbinden kann. Kompatibel zum Website Manager AddOn.

Features
--------

* Ausgabe des Trackingcodes über `rex_tracking_code::getTrackingCode()`
* Syntax Highlighting über Codemirror (wenn Addon/Plugin installiert)
* Kompatibel zum [Website Manager AddOn](http://github.com/RexDude/website_manager)

API
---

```php
// geben Sie so den tracking code aus in ihrem template (in der regel vor dem body end tag):
echo rex_tracking_code::getTrackingCode();
</body>
```

Hinweise
--------

* Getestet mit REDAXO 4.5
* AddOn-Ordner lautet: `tracking_code`

Changelog
---------

siehe [CHANGELOG.md](CHANGELOG.md)

Lizenz
------

siehe [LICENSE.md](LICENSE.md)


