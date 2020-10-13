# Simple Obfuscation de liens en javascript
Un petit script javascript pour faire de l'obfuscation de liens avec du code CSS pour ne pas perturber le visiteur.

Encodage en ***ROT13***

Avantage, ce n'est pas du Base64 et ce n'est pas commun.

## Exemple
```html
<span class="link_obf" data_obf="<?= str_rot13('monlien.html') ?>">lien obfusqué</span>
```
## Note
Depot pour un usage de démonstration classique et simple.