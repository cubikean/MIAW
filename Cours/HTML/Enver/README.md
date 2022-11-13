# Enver - Digital Agency Website
&nbsp;
![](https://cubicom.fr/MIAW/HTML/Enver/assets/images/logo.svg)

&nbsp;

### Workflow
Réalisation du site avec [VSCode](https://code.visualstudio.com/) avec l'utilisation du [Sass](https://sass-lang.com/). le site à été pensé mobile first, et chaques parties ont été faites les unes à la suite des autres. Pour ce qui est du résponsive il à été fait pour chaques section, il n'y a pas de feuille de style exprès pour le résponsive 
&nbsp;

### Les mixins

#### Pour le bouton principal
```css
@mixin btn {
	background-color: $button-color;
	color: $title-color-light;
	border: none;
	font-size: 20px;
	width: fit-content;
	transition: all 0.3s;
	padding: 12px 50px 12px 20px;
	line-height: 22px;
	position: relative;
	
	&:hover {
		outline: 1px solid $button-color;
		color: $button-color;
		background-color: transparent;
		transition: all 0.3s;
		cursor: pointer;
  }
  
	&::before{
		content: url('../images/arrow-top.png');
		position: absolute;
		top: 50%;
		transform: translate(0, -50%);
		right: 15px;
		width: 16px;
		height: 16px;
	}
}
```
&nbsp;
#### Pour le btn play et les fleches droites gauches du slider
```css
@mixin btn-play{
	position: absolute;
	inset: 0;
	display: flex;
	margin: auto;
	border: none;
	width: 120px;
	height: 120px;
	border-radius: 50%;
	background: $button-color;
	opacity: 0;
	transform: translateY(40px);
	transition: all .4s;

	@media screen and (max-width:768px) {
		width: 50px;
		height: 50px;
	}

	svg{
		width: 25px;
		height: auto;
		margin: auto;

		@media screen and (max-width:768px) {
			width: 15px;
		}
	}
	&:hover{
		cursor: pointer;
	}
}
```
&nbsp;
#### Pour les formes lumineuses 
#####Forme bleu
```css
@mixin blue-shape {
	background: linear-gradient(
		180deg,
		rgba(84, 84, 212, 0.27) 0%,
		rgba(84, 84, 212, 0.1134) 100%
	);
	filter: blur(150px);
	border-radius: 233.5px;
	transform: rotate(-41.34deg);
}
```

#####Forme orange
```css
@mixin orange-shape {
	background: linear-gradient(
		180deg,
		rgba(251, 168, 28, 0.048) 0%,
		rgba(224, 86, 136, 0.018) 100%
	);
	filter: blur(150px);
	border-radius: 233.5px;
}
```
&nbsp;
### Utilisation des Pseudo-elements
`::before` et `::after` pour la l'affichage de petits élements, comme les bordures des items du menu 

`:hover` pour les changements de couleurs au survol de certains élements  

`::nth-child(n)` pour changer la taille des `<span>` pour le menu burger
&nbsp;
### Positionnement 
utilisation de position `absolute` pour les formes de couleurs avec un position `relative` sur l'element parent 


