<?php
// $Id: data.inc.php,v 1.7 2010/10/08 00:30:41 philbar Exp $

/**
 * @file
 * Contains all data neccessary to interpret css.
 */

define('AT_START',    1);
define('AT_END',      2);
define('SEL_START',   3);
define('SEL_END',     4);
define('PROPERTY',    5);
define('VALUE',       6);
define('COMMENT',     7);
define('DEFAULT_AT', 41);

/**
 * All whitespace allowed in CSS
 *
 * @global array $GLOBALS['csstidy']['whitespace']
 * @version 1.0
 */
$GLOBALS['csstidy']['whitespace'] = array(' ', "\n", "\t", "\r", "\x0B");

/**
 * All CSS tokens used by csstidy
 *
 * @global string $GLOBALS['csstidy']['tokens']
 * @version 1.0
 */
$GLOBALS['csstidy']['tokens'] = '/@}{;:=\'"(,\\!$%&)+.<>?[]^`|~';

/**
 * All CSS units (CSS 3 units included)
 *
 * @see compress_numbers()
 * @global array $GLOBALS['csstidy']['units']
 * @version 1.0
 */
$GLOBALS['csstidy']['units'] = array('in', 'cm', 'mm', 'pt', 'pc', 'px', 'rem', 'em', '%', 'ex', 'gd', 'vw', 'vh', 'vm', 'deg', 'grad', 'rad', 'ms', 's', 'khz', 'hz');

/**
 * Available at-rules
 *
 * @global array $GLOBALS['csstidy']['at_rules']
 * @version 1.0
 */
$GLOBALS['csstidy']['at_rules'] = array(
  'page' => 'is',
  'font-face' => 'is',
  'charset' => 'iv',
  'import' => 'iv',
  'namespace' => 'iv',
  'media' => 'at'
);

 /**
 * Properties that need a value with unit
 *
 * @todo CSS3 properties
 * @see compress_numbers();
 * @global array $GLOBALS['csstidy']['unit_values']
 * @version 1.2
 */
$GLOBALS['csstidy']['unit_values'] = array(
  'background',
  'background-position',
  'border',
  'border-top',
  'border-right',
  'border-bottom',
  'border-left',
  'border-width',
  'border-top-width',
  'border-right-width',
  'border-left-width',
  'border-bottom-width',
  'bottom',
  'border-spacing',
  'font-size',
  'height',
  'left',
  'margin',
  'margin-top',
  'margin-right',
  'margin-bottom',
  'margin-left',
  'max-height',
  'max-width',
  'min-height',
  'min-width',
  'outline',
  'outline-width',
  'padding',
  'padding-top',
  'padding-right',
  'padding-bottom',
  'padding-left',
  'right',
  'top',
  'text-indent',
  'letter-spacing',
  'word-spacing',
  'width'
);

/**
 * Properties that allow <color> as value
 *
 * @todo CSS3 properties
 * @see compress_numbers();
 * @global array $GLOBALS['csstidy']['color_values']
 * @version 1.0
 */
$GLOBALS['csstidy']['color_values'] = array();
$GLOBALS['csstidy']['color_values'][] = 'background-color';
$GLOBALS['csstidy']['color_values'][] = 'border-color';
$GLOBALS['csstidy']['color_values'][] = 'border-top-color';
$GLOBALS['csstidy']['color_values'][] = 'border-right-color';
$GLOBALS['csstidy']['color_values'][] = 'border-bottom-color';
$GLOBALS['csstidy']['color_values'][] = 'border-left-color';
$GLOBALS['csstidy']['color_values'][] = 'color';
$GLOBALS['csstidy']['color_values'][] = 'outline-color';

/**
 * Default values for the background properties
 *
 * @todo Possibly property names will change during CSS3 development
 * @global array $GLOBALS['csstidy']['background_prop_default']
 * @see dissolve_short_bg()
 * @see merge_bg()
 * @version 1.0
 */
$GLOBALS['csstidy']['background_prop_default'] = array();
$GLOBALS['csstidy']['background_prop_default']['background-image'] = 'none';
$GLOBALS['csstidy']['background_prop_default']['background-size'] = 'auto';
$GLOBALS['csstidy']['background_prop_default']['background-repeat'] = 'repeat';
$GLOBALS['csstidy']['background_prop_default']['background-position'] = '0 0';
$GLOBALS['csstidy']['background_prop_default']['background-attachment'] = 'scroll';
$GLOBALS['csstidy']['background_prop_default']['background-clip'] = 'border';
$GLOBALS['csstidy']['background_prop_default']['background-origin'] = 'padding';
$GLOBALS['csstidy']['background_prop_default']['background-color'] = 'transparent';

/**
 * Default values for the font properties
 *
 * @global array $GLOBALS['csstidy']['font_prop_default']
 * @see merge_fonts()
 * @version 1.3
 */
$GLOBALS['csstidy']['font_prop_default'] = array();
$GLOBALS['csstidy']['font_prop_default']['font-style'] = 'normal';
$GLOBALS['csstidy']['font_prop_default']['font-variant'] = 'normal';
$GLOBALS['csstidy']['font_prop_default']['font-weight'] = 'normal';
$GLOBALS['csstidy']['font_prop_default']['font-size'] = '';
$GLOBALS['csstidy']['font_prop_default']['line-height'] = '';
$GLOBALS['csstidy']['font_prop_default']['font-family'] = '';

/**
 * A list of non-W3C color names which get replaced by their hex-codes
 *
 * @global array $GLOBALS['csstidy']['replace_colors']
 * @see cut_color()
 * @version 1.0
 */
$GLOBALS['csstidy']['replace_colors'] = array();
$GLOBALS['csstidy']['replace_colors']['aliceblue'] = '#f0f8ff';
$GLOBALS['csstidy']['replace_colors']['antiquewhite'] = '#faebd7';
$GLOBALS['csstidy']['replace_colors']['aquamarine'] = '#7fffd4';
$GLOBALS['csstidy']['replace_colors']['azure'] = '#f0ffff';
$GLOBALS['csstidy']['replace_colors']['beige'] = '#f5f5dc';
$GLOBALS['csstidy']['replace_colors']['bisque'] = '#ffe4c4';
$GLOBALS['csstidy']['replace_colors']['blanchedalmond'] = '#ffebcd';
$GLOBALS['csstidy']['replace_colors']['blueviolet'] = '#8a2be2';
$GLOBALS['csstidy']['replace_colors']['brown'] = '#a52a2a';
$GLOBALS['csstidy']['replace_colors']['burlywood'] = '#deb887';
$GLOBALS['csstidy']['replace_colors']['cadetblue'] = '#5f9ea0';
$GLOBALS['csstidy']['replace_colors']['chartreuse'] = '#7fff00';
$GLOBALS['csstidy']['replace_colors']['chocolate'] = '#d2691e';
$GLOBALS['csstidy']['replace_colors']['coral'] = '#ff7f50';
$GLOBALS['csstidy']['replace_colors']['cornflowerblue'] = '#6495ed';
$GLOBALS['csstidy']['replace_colors']['cornsilk'] = '#fff8dc';
$GLOBALS['csstidy']['replace_colors']['crimson'] = '#dc143c';
$GLOBALS['csstidy']['replace_colors']['cyan'] = '#00ffff';
$GLOBALS['csstidy']['replace_colors']['darkblue'] = '#00008b';
$GLOBALS['csstidy']['replace_colors']['darkcyan'] = '#008b8b';
$GLOBALS['csstidy']['replace_colors']['darkgoldenrod'] = '#b8860b';
$GLOBALS['csstidy']['replace_colors']['darkgray'] = '#a9a9a9';
$GLOBALS['csstidy']['replace_colors']['darkgreen'] = '#006400';
$GLOBALS['csstidy']['replace_colors']['darkkhaki'] = '#bdb76b';
$GLOBALS['csstidy']['replace_colors']['darkmagenta'] = '#8b008b';
$GLOBALS['csstidy']['replace_colors']['darkolivegreen'] = '#556b2f';
$GLOBALS['csstidy']['replace_colors']['darkorange'] = '#ff8c00';
$GLOBALS['csstidy']['replace_colors']['darkorchid'] = '#9932cc';
$GLOBALS['csstidy']['replace_colors']['darkred'] = '#8b0000';
$GLOBALS['csstidy']['replace_colors']['darksalmon'] = '#e9967a';
$GLOBALS['csstidy']['replace_colors']['darkseagreen'] = '#8fbc8f';
$GLOBALS['csstidy']['replace_colors']['darkslateblue'] = '#483d8b';
$GLOBALS['csstidy']['replace_colors']['darkslategray'] = '#2f4f4f';
$GLOBALS['csstidy']['replace_colors']['darkturquoise'] = '#00ced1';
$GLOBALS['csstidy']['replace_colors']['darkviolet'] = '#9400d3';
$GLOBALS['csstidy']['replace_colors']['deeppink'] = '#ff1493';
$GLOBALS['csstidy']['replace_colors']['deepskyblue'] = '#00bfff';
$GLOBALS['csstidy']['replace_colors']['dimgray'] = '#696969';
$GLOBALS['csstidy']['replace_colors']['dodgerblue'] = '#1e90ff';
$GLOBALS['csstidy']['replace_colors']['feldspar'] = '#d19275';
$GLOBALS['csstidy']['replace_colors']['firebrick'] = '#b22222';
$GLOBALS['csstidy']['replace_colors']['floralwhite'] = '#fffaf0';
$GLOBALS['csstidy']['replace_colors']['forestgreen'] = '#228b22';
$GLOBALS['csstidy']['replace_colors']['gainsboro'] = '#dcdcdc';
$GLOBALS['csstidy']['replace_colors']['ghostwhite'] = '#f8f8ff';
$GLOBALS['csstidy']['replace_colors']['gold'] = '#ffd700';
$GLOBALS['csstidy']['replace_colors']['goldenrod'] = '#daa520';
$GLOBALS['csstidy']['replace_colors']['greenyellow'] = '#adff2f';
$GLOBALS['csstidy']['replace_colors']['honeydew'] = '#f0fff0';
$GLOBALS['csstidy']['replace_colors']['hotpink'] = '#ff69b4';
$GLOBALS['csstidy']['replace_colors']['indianred'] = '#cd5c5c';
$GLOBALS['csstidy']['replace_colors']['indigo'] = '#4b0082';
$GLOBALS['csstidy']['replace_colors']['ivory'] = '#fffff0';
$GLOBALS['csstidy']['replace_colors']['khaki'] = '#f0e68c';
$GLOBALS['csstidy']['replace_colors']['lavender'] = '#e6e6fa';
$GLOBALS['csstidy']['replace_colors']['lavenderblush'] = '#fff0f5';
$GLOBALS['csstidy']['replace_colors']['lawngreen'] = '#7cfc00';
$GLOBALS['csstidy']['replace_colors']['lemonchiffon'] = '#fffacd';
$GLOBALS['csstidy']['replace_colors']['lightblue'] = '#add8e6';
$GLOBALS['csstidy']['replace_colors']['lightcoral'] = '#f08080';
$GLOBALS['csstidy']['replace_colors']['lightcyan'] = '#e0ffff';
$GLOBALS['csstidy']['replace_colors']['lightgoldenrodyellow'] = '#fafad2';
$GLOBALS['csstidy']['replace_colors']['lightgrey'] = '#d3d3d3';
$GLOBALS['csstidy']['replace_colors']['lightgreen'] = '#90ee90';
$GLOBALS['csstidy']['replace_colors']['lightpink'] = '#ffb6c1';
$GLOBALS['csstidy']['replace_colors']['lightsalmon'] = '#ffa07a';
$GLOBALS['csstidy']['replace_colors']['lightseagreen'] = '#20b2aa';
$GLOBALS['csstidy']['replace_colors']['lightskyblue'] = '#87cefa';
$GLOBALS['csstidy']['replace_colors']['lightslateblue'] = '#8470ff';
$GLOBALS['csstidy']['replace_colors']['lightslategray'] = '#778899';
$GLOBALS['csstidy']['replace_colors']['lightsteelblue'] = '#b0c4de';
$GLOBALS['csstidy']['replace_colors']['lightyellow'] = '#ffffe0';
$GLOBALS['csstidy']['replace_colors']['limegreen'] = '#32cd32';
$GLOBALS['csstidy']['replace_colors']['linen'] = '#faf0e6';
$GLOBALS['csstidy']['replace_colors']['magenta'] = '#ff00ff';
$GLOBALS['csstidy']['replace_colors']['mediumaquamarine'] = '#66cdaa';
$GLOBALS['csstidy']['replace_colors']['mediumblue'] = '#0000cd';
$GLOBALS['csstidy']['replace_colors']['mediumorchid'] = '#ba55d3';
$GLOBALS['csstidy']['replace_colors']['mediumpurple'] = '#9370d8';
$GLOBALS['csstidy']['replace_colors']['mediumseagreen'] = '#3cb371';
$GLOBALS['csstidy']['replace_colors']['mediumslateblue'] = '#7b68ee';
$GLOBALS['csstidy']['replace_colors']['mediumspringgreen'] = '#00fa9a';
$GLOBALS['csstidy']['replace_colors']['mediumturquoise'] = '#48d1cc';
$GLOBALS['csstidy']['replace_colors']['mediumvioletred'] = '#c71585';
$GLOBALS['csstidy']['replace_colors']['midnightblue'] = '#191970';
$GLOBALS['csstidy']['replace_colors']['mintcream'] = '#f5fffa';
$GLOBALS['csstidy']['replace_colors']['mistyrose'] = '#ffe4e1';
$GLOBALS['csstidy']['replace_colors']['moccasin'] = '#ffe4b5';
$GLOBALS['csstidy']['replace_colors']['navajowhite'] = '#ffdead';
$GLOBALS['csstidy']['replace_colors']['oldlace'] = '#fdf5e6';
$GLOBALS['csstidy']['replace_colors']['olivedrab'] = '#6b8e23';
$GLOBALS['csstidy']['replace_colors']['orangered'] = '#ff4500';
$GLOBALS['csstidy']['replace_colors']['orchid'] = '#da70d6';
$GLOBALS['csstidy']['replace_colors']['palegoldenrod'] = '#eee8aa';
$GLOBALS['csstidy']['replace_colors']['palegreen'] = '#98fb98';
$GLOBALS['csstidy']['replace_colors']['paleturquoise'] = '#afeeee';
$GLOBALS['csstidy']['replace_colors']['palevioletred'] = '#d87093';
$GLOBALS['csstidy']['replace_colors']['papayawhip'] = '#ffefd5';
$GLOBALS['csstidy']['replace_colors']['peachpuff'] = '#ffdab9';
$GLOBALS['csstidy']['replace_colors']['peru'] = '#cd853f';
$GLOBALS['csstidy']['replace_colors']['pink'] = '#ffc0cb';
$GLOBALS['csstidy']['replace_colors']['plum'] = '#dda0dd';
$GLOBALS['csstidy']['replace_colors']['powderblue'] = '#b0e0e6';
$GLOBALS['csstidy']['replace_colors']['rosybrown'] = '#bc8f8f';
$GLOBALS['csstidy']['replace_colors']['royalblue'] = '#4169e1';
$GLOBALS['csstidy']['replace_colors']['saddlebrown'] = '#8b4513';
$GLOBALS['csstidy']['replace_colors']['salmon'] = '#fa8072';
$GLOBALS['csstidy']['replace_colors']['sandybrown'] = '#f4a460';
$GLOBALS['csstidy']['replace_colors']['seagreen'] = '#2e8b57';
$GLOBALS['csstidy']['replace_colors']['seashell'] = '#fff5ee';
$GLOBALS['csstidy']['replace_colors']['sienna'] = '#a0522d';
$GLOBALS['csstidy']['replace_colors']['skyblue'] = '#87ceeb';
$GLOBALS['csstidy']['replace_colors']['slateblue'] = '#6a5acd';
$GLOBALS['csstidy']['replace_colors']['slategray'] = '#708090';
$GLOBALS['csstidy']['replace_colors']['snow'] = '#fffafa';
$GLOBALS['csstidy']['replace_colors']['springgreen'] = '#00ff7f';
$GLOBALS['csstidy']['replace_colors']['steelblue'] = '#4682b4';
$GLOBALS['csstidy']['replace_colors']['tan'] = '#d2b48c';
$GLOBALS['csstidy']['replace_colors']['thistle'] = '#d8bfd8';
$GLOBALS['csstidy']['replace_colors']['tomato'] = '#ff6347';
$GLOBALS['csstidy']['replace_colors']['turquoise'] = '#40e0d0';
$GLOBALS['csstidy']['replace_colors']['violet'] = '#ee82ee';
$GLOBALS['csstidy']['replace_colors']['violetred'] = '#d02090';
$GLOBALS['csstidy']['replace_colors']['wheat'] = '#f5deb3';
$GLOBALS['csstidy']['replace_colors']['whitesmoke'] = '#f5f5f5';
$GLOBALS['csstidy']['replace_colors']['yellowgreen'] = '#9acd32';

/**
 * A list of all shorthand properties that are devided into four properties and/or have four subvalues
 *
 * @global array $GLOBALS['csstidy']['shorthands']
 * @todo Are there new ones in CSS3?
 * @see dissolve_4value_shorthands()
 * @see merge_4value_shorthands()
 * @version 1.0
 */
$GLOBALS['csstidy']['shorthands'] = array();
$GLOBALS['csstidy']['shorthands']['border-color'] = array('border-top-color', 'border-right-color', 'border-bottom-color', 'border-left-color');
$GLOBALS['csstidy']['shorthands']['border-style'] = array('border-top-style', 'border-right-style', 'border-bottom-style', 'border-left-style');
$GLOBALS['csstidy']['shorthands']['border-width'] = array('border-top-width', 'border-right-width', 'border-bottom-width', 'border-left-width');
$GLOBALS['csstidy']['shorthands']['margin'] = array('margin-top', 'margin-right', 'margin-bottom', 'margin-left');
$GLOBALS['csstidy']['shorthands']['padding'] = array('padding-top', 'padding-right', 'padding-bottom', 'padding-left');
$GLOBALS['csstidy']['shorthands']['-moz-border-radius'] = 0;

/**
 * All CSS Properties. Needed for csstidy::property_is_next()
 *
 * @global array $GLOBALS['csstidy']['all_properties']
 * @todo Add CSS3 properties
 * @version 1.0
 * @see csstidy::property_is_next()
 */
$GLOBALS['csstidy']['all_properties'] = array();
$GLOBALS['csstidy']['all_properties']['background'] = 'CSS1.0,CSS2.0,CSS2.1';
$GLOBALS['csstidy']['all_properties']['background-color'] = 'CSS1.0,CSS2.0,CSS2.1';
$GLOBALS['csstidy']['all_properties']['background-image'] = 'CSS1.0,CSS2.0,CSS2.1';
$GLOBALS['csstidy']['all_properties']['background-repeat'] = 'CSS1.0,CSS2.0,CSS2.1';
$GLOBALS['csstidy']['all_properties']['background-attachment'] = 'CSS1.0,CSS2.0,CSS2.1';
$GLOBALS['csstidy']['all_properties']['background-position'] = 'CSS1.0,CSS2.0,CSS2.1';
$GLOBALS['csstidy']['all_properties']['border'] = 'CSS1.0,CSS2.0,CSS2.1';
$GLOBALS['csstidy']['all_properties']['border-top'] = 'CSS1.0,CSS2.0,CSS2.1';
$GLOBALS['csstidy']['all_properties']['border-right'] = 'CSS1.0,CSS2.0,CSS2.1';
$GLOBALS['csstidy']['all_properties']['border-bottom'] = 'CSS1.0,CSS2.0,CSS2.1';
$GLOBALS['csstidy']['all_properties']['border-left'] = 'CSS1.0,CSS2.0,CSS2.1';
$GLOBALS['csstidy']['all_properties']['border-color'] = 'CSS1.0,CSS2.0,CSS2.1';
$GLOBALS['csstidy']['all_properties']['border-top-color'] = 'CSS2.0,CSS2.1';
$GLOBALS['csstidy']['all_properties']['border-bottom-color'] = 'CSS2.0,CSS2.1';
$GLOBALS['csstidy']['all_properties']['border-left-color'] = 'CSS2.0,CSS2.1';
$GLOBALS['csstidy']['all_properties']['border-right-color'] = 'CSS2.0,CSS2.1';
$GLOBALS['csstidy']['all_properties']['border-style'] = 'CSS1.0,CSS2.0,CSS2.1';
$GLOBALS['csstidy']['all_properties']['border-top-style'] = 'CSS2.0,CSS2.1';
$GLOBALS['csstidy']['all_properties']['border-right-style'] = 'CSS2.0,CSS2.1';
$GLOBALS['csstidy']['all_properties']['border-left-style'] = 'CSS2.0,CSS2.1';
$GLOBALS['csstidy']['all_properties']['border-bottom-style'] = 'CSS2.0,CSS2.1';
$GLOBALS['csstidy']['all_properties']['border-width'] = 'CSS1.0,CSS2.0,CSS2.1';
$GLOBALS['csstidy']['all_properties']['border-top-width'] = 'CSS1.0,CSS2.0,CSS2.1';
$GLOBALS['csstidy']['all_properties']['border-right-width'] = 'CSS1.0,CSS2.0,CSS2.1';
$GLOBALS['csstidy']['all_properties']['border-left-width'] = 'CSS1.0,CSS2.0,CSS2.1';
$GLOBALS['csstidy']['all_properties']['border-bottom-width'] = 'CSS1.0,CSS2.0,CSS2.1';
$GLOBALS['csstidy']['all_properties']['border-collapse'] = 'CSS2.0,CSS2.1';
$GLOBALS['csstidy']['all_properties']['border-spacing'] = 'CSS2.0,CSS2.1';
$GLOBALS['csstidy']['all_properties']['bottom'] = 'CSS2.0,CSS2.1';
$GLOBALS['csstidy']['all_properties']['caption-side'] = 'CSS2.0,CSS2.1';
$GLOBALS['csstidy']['all_properties']['content'] = 'CSS2.0,CSS2.1';
$GLOBALS['csstidy']['all_properties']['clear'] = 'CSS1.0,CSS2.0,CSS2.1';
$GLOBALS['csstidy']['all_properties']['clip'] = 'CSS1.0,CSS2.0,CSS2.1';
$GLOBALS['csstidy']['all_properties']['color'] = 'CSS1.0,CSS2.0,CSS2.1';
$GLOBALS['csstidy']['all_properties']['counter-reset'] = 'CSS2.0,CSS2.1';
$GLOBALS['csstidy']['all_properties']['counter-increment'] = 'CSS2.0,CSS2.1';
$GLOBALS['csstidy']['all_properties']['cursor'] = 'CSS2.0,CSS2.1';
$GLOBALS['csstidy']['all_properties']['empty-cells'] = 'CSS2.0,CSS2.1';
$GLOBALS['csstidy']['all_properties']['display'] = 'CSS1.0,CSS2.0,CSS2.1';
$GLOBALS['csstidy']['all_properties']['direction'] = 'CSS2.0,CSS2.1';
$GLOBALS['csstidy']['all_properties']['float'] = 'CSS1.0,CSS2.0,CSS2.1';
$GLOBALS['csstidy']['all_properties']['font'] = 'CSS1.0,CSS2.0,CSS2.1';
$GLOBALS['csstidy']['all_properties']['font-family'] = 'CSS1.0,CSS2.0,CSS2.1';
$GLOBALS['csstidy']['all_properties']['font-style'] = 'CSS1.0,CSS2.0,CSS2.1';
$GLOBALS['csstidy']['all_properties']['font-variant'] = 'CSS1.0,CSS2.0,CSS2.1';
$GLOBALS['csstidy']['all_properties']['font-weight'] = 'CSS1.0,CSS2.0,CSS2.1';
$GLOBALS['csstidy']['all_properties']['font-stretch'] = 'CSS2.0';
$GLOBALS['csstidy']['all_properties']['font-size-adjust'] = 'CSS2.0';
$GLOBALS['csstidy']['all_properties']['font-size'] = 'CSS1.0,CSS2.0,CSS2.1';
$GLOBALS['csstidy']['all_properties']['height'] = 'CSS1.0,CSS2.0,CSS2.1';
$GLOBALS['csstidy']['all_properties']['left'] = 'CSS1.0,CSS2.0,CSS2.1';
$GLOBALS['csstidy']['all_properties']['line-height'] = 'CSS1.0,CSS2.0,CSS2.1';
$GLOBALS['csstidy']['all_properties']['list-style'] = 'CSS1.0,CSS2.0,CSS2.1';
$GLOBALS['csstidy']['all_properties']['list-style-type'] = 'CSS1.0,CSS2.0,CSS2.1';
$GLOBALS['csstidy']['all_properties']['list-style-image'] = 'CSS1.0,CSS2.0,CSS2.1';
$GLOBALS['csstidy']['all_properties']['list-style-position'] = 'CSS1.0,CSS2.0,CSS2.1';
$GLOBALS['csstidy']['all_properties']['margin'] = 'CSS1.0,CSS2.0,CSS2.1';
$GLOBALS['csstidy']['all_properties']['margin-top'] = 'CSS1.0,CSS2.0,CSS2.1';
$GLOBALS['csstidy']['all_properties']['margin-right'] = 'CSS1.0,CSS2.0,CSS2.1';
$GLOBALS['csstidy']['all_properties']['margin-bottom'] = 'CSS1.0,CSS2.0,CSS2.1';
$GLOBALS['csstidy']['all_properties']['margin-left'] = 'CSS1.0,CSS2.0,CSS2.1';
$GLOBALS['csstidy']['all_properties']['marks'] = 'CSS1.0,CSS2.0';
$GLOBALS['csstidy']['all_properties']['marker-offset'] = 'CSS2.0';
$GLOBALS['csstidy']['all_properties']['max-height'] = 'CSS2.0,CSS2.1';
$GLOBALS['csstidy']['all_properties']['max-width'] = 'CSS2.0,CSS2.1';
$GLOBALS['csstidy']['all_properties']['min-height'] = 'CSS2.0,CSS2.1';
$GLOBALS['csstidy']['all_properties']['min-width'] = 'CSS2.0,CSS2.1';
$GLOBALS['csstidy']['all_properties']['overflow'] = 'CSS1.0,CSS2.0,CSS2.1';
$GLOBALS['csstidy']['all_properties']['orphans'] = 'CSS2.0,CSS2.1';
$GLOBALS['csstidy']['all_properties']['outline'] = 'CSS2.0,CSS2.1';
$GLOBALS['csstidy']['all_properties']['outline-width'] = 'CSS2.0,CSS2.1';
$GLOBALS['csstidy']['all_properties']['outline-style'] = 'CSS2.0,CSS2.1';
$GLOBALS['csstidy']['all_properties']['outline-color'] = 'CSS2.0,CSS2.1';
$GLOBALS['csstidy']['all_properties']['padding'] = 'CSS1.0,CSS2.0,CSS2.1';
$GLOBALS['csstidy']['all_properties']['padding-top'] = 'CSS1.0,CSS2.0,CSS2.1';
$GLOBALS['csstidy']['all_properties']['padding-right'] = 'CSS1.0,CSS2.0,CSS2.1';
$GLOBALS['csstidy']['all_properties']['padding-bottom'] = 'CSS1.0,CSS2.0,CSS2.1';
$GLOBALS['csstidy']['all_properties']['padding-left'] = 'CSS1.0,CSS2.0,CSS2.1';
$GLOBALS['csstidy']['all_properties']['page-break-before'] = 'CSS1.0,CSS2.0,CSS2.1';
$GLOBALS['csstidy']['all_properties']['page-break-after'] = 'CSS1.0,CSS2.0,CSS2.1';
$GLOBALS['csstidy']['all_properties']['page-break-inside'] = 'CSS2.0,CSS2.1';
$GLOBALS['csstidy']['all_properties']['page'] = 'CSS2.0';
$GLOBALS['csstidy']['all_properties']['position'] = 'CSS1.0,CSS2.0,CSS2.1';
$GLOBALS['csstidy']['all_properties']['quotes'] = 'CSS2.0,CSS2.1';
$GLOBALS['csstidy']['all_properties']['right'] = 'CSS2.0,CSS2.1';
$GLOBALS['csstidy']['all_properties']['size'] = 'CSS1.0,CSS2.0';
$GLOBALS['csstidy']['all_properties']['speak-header'] = 'CSS2.0,CSS2.1';
$GLOBALS['csstidy']['all_properties']['table-layout'] = 'CSS2.0,CSS2.1';
$GLOBALS['csstidy']['all_properties']['top'] = 'CSS1.0,CSS2.0,CSS2.1';
$GLOBALS['csstidy']['all_properties']['text-indent'] = 'CSS1.0,CSS2.0,CSS2.1';
$GLOBALS['csstidy']['all_properties']['text-align'] = 'CSS1.0,CSS2.0,CSS2.1';
$GLOBALS['csstidy']['all_properties']['text-decoration'] = 'CSS1.0,CSS2.0,CSS2.1';
$GLOBALS['csstidy']['all_properties']['text-shadow'] = 'CSS2.0';
$GLOBALS['csstidy']['all_properties']['letter-spacing'] = 'CSS1.0,CSS2.0,CSS2.1';
$GLOBALS['csstidy']['all_properties']['word-spacing'] = 'CSS1.0,CSS2.0,CSS2.1';
$GLOBALS['csstidy']['all_properties']['text-transform'] = 'CSS1.0,CSS2.0,CSS2.1';
$GLOBALS['csstidy']['all_properties']['white-space'] = 'CSS1.0,CSS2.0,CSS2.1';
$GLOBALS['csstidy']['all_properties']['unicode-bidi'] = 'CSS2.0,CSS2.1';
$GLOBALS['csstidy']['all_properties']['vertical-align'] = 'CSS1.0,CSS2.0,CSS2.1';
$GLOBALS['csstidy']['all_properties']['visibility'] = 'CSS1.0,CSS2.0,CSS2.1';
$GLOBALS['csstidy']['all_properties']['width'] = 'CSS1.0,CSS2.0,CSS2.1';
$GLOBALS['csstidy']['all_properties']['widows'] = 'CSS2.0,CSS2.1';
$GLOBALS['csstidy']['all_properties']['z-index'] = 'CSS1.0,CSS2.0,CSS2.1';
/* Speech */
$GLOBALS['csstidy']['all_properties']['volume'] = 'CSS2.0,CSS2.1';
$GLOBALS['csstidy']['all_properties']['speak'] = 'CSS2.0,CSS2.1';
$GLOBALS['csstidy']['all_properties']['pause'] = 'CSS2.0,CSS2.1';
$GLOBALS['csstidy']['all_properties']['pause-before'] = 'CSS2.0,CSS2.1';
$GLOBALS['csstidy']['all_properties']['pause-after'] = 'CSS2.0,CSS2.1';
$GLOBALS['csstidy']['all_properties']['cue'] = 'CSS2.0,CSS2.1';
$GLOBALS['csstidy']['all_properties']['cue-before'] = 'CSS2.0,CSS2.1';
$GLOBALS['csstidy']['all_properties']['cue-after'] = 'CSS2.0,CSS2.1';
$GLOBALS['csstidy']['all_properties']['play-during'] = 'CSS2.0,CSS2.1';
$GLOBALS['csstidy']['all_properties']['azimuth'] = 'CSS2.0,CSS2.1';
$GLOBALS['csstidy']['all_properties']['elevation'] = 'CSS2.0,CSS2.1';
$GLOBALS['csstidy']['all_properties']['speech-rate'] = 'CSS2.0,CSS2.1';
$GLOBALS['csstidy']['all_properties']['voice-family'] = 'CSS2.0,CSS2.1';
$GLOBALS['csstidy']['all_properties']['pitch'] = 'CSS2.0,CSS2.1';
$GLOBALS['csstidy']['all_properties']['pitch-range'] = 'CSS2.0,CSS2.1';
$GLOBALS['csstidy']['all_properties']['stress'] = 'CSS2.0,CSS2.1';
$GLOBALS['csstidy']['all_properties']['richness'] = 'CSS2.0,CSS2.1';
$GLOBALS['csstidy']['all_properties']['speak-punctuation'] = 'CSS2.0,CSS2.1';
$GLOBALS['csstidy']['all_properties']['speak-numeral'] = 'CSS2.0,CSS2.1';
/* Mozilla Specific */
$GLOBALS['csstidy']['all_properties']['-moz-appearance'];
$GLOBALS['csstidy']['all_properties']['-moz-background-clip'];
$GLOBALS['csstidy']['all_properties']['-moz-background-inline-policy'];
$GLOBALS['csstidy']['all_properties']['-moz-background-origin'];
$GLOBALS['csstidy']['all_properties']['-moz-background-size'];
$GLOBALS['csstidy']['all_properties']['-moz-binding'];
$GLOBALS['csstidy']['all_properties']['-moz-border-bottom-colors'];
$GLOBALS['csstidy']['all_properties']['-moz-border-left-colors'];
$GLOBALS['csstidy']['all_properties']['-moz-border-right-colors'];
$GLOBALS['csstidy']['all_properties']['-moz-border-top-colors'];
$GLOBALS['csstidy']['all_properties']['-moz-border-end'];
$GLOBALS['csstidy']['all_properties']['-moz-border-end-color'];
$GLOBALS['csstidy']['all_properties']['-moz-border-end-style'];
$GLOBALS['csstidy']['all_properties']['-moz-border-end-width'];
$GLOBALS['csstidy']['all_properties']['-moz-border-image'];
$GLOBALS['csstidy']['all_properties']['-moz-border-start'];
$GLOBALS['csstidy']['all_properties']['-moz-border-start-color'];
$GLOBALS['csstidy']['all_properties']['-moz-border-start-style'];
$GLOBALS['csstidy']['all_properties']['-moz-border-start-width'];
$GLOBALS['csstidy']['all_properties']['-moz-box-align'];
$GLOBALS['csstidy']['all_properties']['-moz-box-direction'];
$GLOBALS['csstidy']['all_properties']['-moz-box-flex'];
$GLOBALS['csstidy']['all_properties']['-moz-box-flexgroup'];
$GLOBALS['csstidy']['all_properties']['-moz-box-ordinal-group'];
$GLOBALS['csstidy']['all_properties']['-moz-box-orient'];
$GLOBALS['csstidy']['all_properties']['-moz-box-pack'];
$GLOBALS['csstidy']['all_properties']['-moz-box-sizing'];
$GLOBALS['csstidy']['all_properties']['-moz-column-count'];
$GLOBALS['csstidy']['all_properties']['-moz-column-gap'];
$GLOBALS['csstidy']['all_properties']['-moz-column-width'];
$GLOBALS['csstidy']['all_properties']['-moz-column-rule'];
$GLOBALS['csstidy']['all_properties']['-moz-column-rule-width'];
$GLOBALS['csstidy']['all_properties']['-moz-column-rule-style'];
$GLOBALS['csstidy']['all_properties']['-moz-column-rule-color'];
$GLOBALS['csstidy']['all_properties']['-moz-float-edge'];
$GLOBALS['csstidy']['all_properties']['-moz-font-feature-settings'];
$GLOBALS['csstidy']['all_properties']['-moz-font-language-override'];
$GLOBALS['csstidy']['all_properties']['-moz-force-broken-image-icon'];
$GLOBALS['csstidy']['all_properties']['-moz-image-region'];
$GLOBALS['csstidy']['all_properties']['-moz-margin-end'];
$GLOBALS['csstidy']['all_properties']['-moz-margin-start'];
$GLOBALS['csstidy']['all_properties']['-moz-opacity'];
$GLOBALS['csstidy']['all_properties']['-moz-outline'];
$GLOBALS['csstidy']['all_properties']['-moz-outline-color'];
$GLOBALS['csstidy']['all_properties']['-moz-outline-offset'];
$GLOBALS['csstidy']['all_properties']['-moz-outline-radius'];
$GLOBALS['csstidy']['all_properties']['-moz-outline-radius-bottomleft'];
$GLOBALS['csstidy']['all_properties']['-moz-outline-radius-bottomright'];
$GLOBALS['csstidy']['all_properties']['-moz-outline-radius-topleft'];
$GLOBALS['csstidy']['all_properties']['-moz-outline-radius-topright'];
$GLOBALS['csstidy']['all_properties']['-moz-outline-style'];
$GLOBALS['csstidy']['all_properties']['-moz-outline-width'];
$GLOBALS['csstidy']['all_properties']['-moz-padding-end'];
$GLOBALS['csstidy']['all_properties']['-moz-padding-start'];
$GLOBALS['csstidy']['all_properties']['-moz-stack-sizing'];
$GLOBALS['csstidy']['all_properties']['-moz-tab-size'];
$GLOBALS['csstidy']['all_properties']['-moz-transform'];
$GLOBALS['csstidy']['all_properties']['-moz-transform-origin'];
$GLOBALS['csstidy']['all_properties']['-moz-transition'];
$GLOBALS['csstidy']['all_properties']['-moz-transition-delay'];
$GLOBALS['csstidy']['all_properties']['-moz-transition-duration'];
$GLOBALS['csstidy']['all_properties']['-moz-transition-property'];
$GLOBALS['csstidy']['all_properties']['-moz-transition-timing-function'];
$GLOBALS['csstidy']['all_properties']['-moz-user-focus'];
$GLOBALS['csstidy']['all_properties']['-moz-user-input'];
$GLOBALS['csstidy']['all_properties']['-moz-user-modify'];
$GLOBALS['csstidy']['all_properties']['-moz-user-select'];
$GLOBALS['csstidy']['all_properties']['-moz-window-shadow'];
/* Webkit Specific */
$GLOBALS['csstidy']['all_properties']['-webkit-animation'];
$GLOBALS['csstidy']['all_properties']['-webkit-animation-delay'];
$GLOBALS['csstidy']['all_properties']['-webkit-animation-direction'];
$GLOBALS['csstidy']['all_properties']['-webkit-animation-duration'];
$GLOBALS['csstidy']['all_properties']['-webkit-animation-fill-mode'];
$GLOBALS['csstidy']['all_properties']['-webkit-animation-iteration-count'];
$GLOBALS['csstidy']['all_properties']['-webkit-animation-name'];
$GLOBALS['csstidy']['all_properties']['-webkit-animation-play-state'];
$GLOBALS['csstidy']['all_properties']['-webkit-animation-timing-function'];
$GLOBALS['csstidy']['all_properties']['-webkit-appearance'];
$GLOBALS['csstidy']['all_properties']['-webkit-backface-visibility'];
$GLOBALS['csstidy']['all_properties']['-webkit-background-clip'];
$GLOBALS['csstidy']['all_properties']['-webkit-background-composite'];
$GLOBALS['csstidy']['all_properties']['-webkit-background-origin'];
$GLOBALS['csstidy']['all_properties']['-webkit-background-size'];
$GLOBALS['csstidy']['all_properties']['-webkit-border-bottom-left-radius'];
$GLOBALS['csstidy']['all_properties']['-webkit-border-bottom-right-radius'];
$GLOBALS['csstidy']['all_properties']['-webkit-border-horizontal-spacing'];
$GLOBALS['csstidy']['all_properties']['-webkit-border-image'];
$GLOBALS['csstidy']['all_properties']['-webkit-border-radius'];
$GLOBALS['csstidy']['all_properties']['-webkit-border-top-left-radius'];
$GLOBALS['csstidy']['all_properties']['-webkit-border-top-right-radius'];
$GLOBALS['csstidy']['all_properties']['-webkit-border-vertical-spacing'];
$GLOBALS['csstidy']['all_properties']['-webkit-box-align'];
$GLOBALS['csstidy']['all_properties']['-webkit-box-direction'];
$GLOBALS['csstidy']['all_properties']['-webkit-box-flex'];
$GLOBALS['csstidy']['all_properties']['-webkit-box-flex-group'];
$GLOBALS['csstidy']['all_properties']['-webkit-box-lines'];
$GLOBALS['csstidy']['all_properties']['-webkit-box-ordinal-group'];
$GLOBALS['csstidy']['all_properties']['-webkit-box-orient'];
$GLOBALS['csstidy']['all_properties']['-webkit-box-pack'];
$GLOBALS['csstidy']['all_properties']['-webkit-box-reflect'];
$GLOBALS['csstidy']['all_properties']['-webkit-box-shadow'];
$GLOBALS['csstidy']['all_properties']['-webkit-box-sizing'];
$GLOBALS['csstidy']['all_properties']['-webkit-column-break-after'];
$GLOBALS['csstidy']['all_properties']['-webkit-column-break-before'];
$GLOBALS['csstidy']['all_properties']['-webkit-column-break-inside'];
$GLOBALS['csstidy']['all_properties']['-webkit-column-count'];
$GLOBALS['csstidy']['all_properties']['-webkit-column-gap'];
$GLOBALS['csstidy']['all_properties']['-webkit-column-rule'];
$GLOBALS['csstidy']['all_properties']['-webkit-column-rule-color'];
$GLOBALS['csstidy']['all_properties']['-webkit-column-rule-style'];
$GLOBALS['csstidy']['all_properties']['-webkit-column-rule-width'];
$GLOBALS['csstidy']['all_properties']['-webkit-column-width'];
$GLOBALS['csstidy']['all_properties']['-webkit-columns'];
$GLOBALS['csstidy']['all_properties']['-webkit-dashboard-region'];
$GLOBALS['csstidy']['all_properties']['-webkit-line-break'];
$GLOBALS['csstidy']['all_properties']['-webkit-margin-bottom-collapse'];
$GLOBALS['csstidy']['all_properties']['-webkit-margin-collapse'];
$GLOBALS['csstidy']['all_properties']['-webkit-margin-start'];
$GLOBALS['csstidy']['all_properties']['-webkit-margin-top-collapse'];
$GLOBALS['csstidy']['all_properties']['-webkit-marquee'];
$GLOBALS['csstidy']['all_properties']['-webkit-marquee-direction'];
$GLOBALS['csstidy']['all_properties']['-webkit-marquee-increment'];
$GLOBALS['csstidy']['all_properties']['-webkit-marquee-repetition'];
$GLOBALS['csstidy']['all_properties']['-webkit-marquee-speed'];
$GLOBALS['csstidy']['all_properties']['-webkit-marquee-style'];
$GLOBALS['csstidy']['all_properties']['-webkit-mask'];
$GLOBALS['csstidy']['all_properties']['-webkit-mask-attachment'];
$GLOBALS['csstidy']['all_properties']['-webkit-mask-box-image'];
$GLOBALS['csstidy']['all_properties']['-webkit-mask-clip'];
$GLOBALS['csstidy']['all_properties']['-webkit-mask-composite'];
$GLOBALS['csstidy']['all_properties']['-webkit-mask-image'];
$GLOBALS['csstidy']['all_properties']['-webkit-mask-origin'];
$GLOBALS['csstidy']['all_properties']['-webkit-mask-position'];
$GLOBALS['csstidy']['all_properties']['-webkit-mask-position-x'];
$GLOBALS['csstidy']['all_properties']['-webkit-mask-position-y'];
$GLOBALS['csstidy']['all_properties']['-webkit-mask-repeat'];
$GLOBALS['csstidy']['all_properties']['-webkit-mask-size'];
$GLOBALS['csstidy']['all_properties']['-webkit-nbsp-mode'];
$GLOBALS['csstidy']['all_properties']['-webkit-padding-start'];
$GLOBALS['csstidy']['all_properties']['-webkit-perspective'];
$GLOBALS['csstidy']['all_properties']['-webkit-perspective-origin'];
$GLOBALS['csstidy']['all_properties']['-webkit-rtl-ordering'];
$GLOBALS['csstidy']['all_properties']['-webkit-tap-highlight-color'];
$GLOBALS['csstidy']['all_properties']['-webkit-text-fill-color'];
$GLOBALS['csstidy']['all_properties']['-webkit-text-security'];
$GLOBALS['csstidy']['all_properties']['-webkit-text-size-adjust'];
$GLOBALS['csstidy']['all_properties']['-webkit-text-stroke'];
$GLOBALS['csstidy']['all_properties']['-webkit-text-stroke-color'];
$GLOBALS['csstidy']['all_properties']['-webkit-text-stroke-width'];
$GLOBALS['csstidy']['all_properties']['-webkit-touch-callout'];
$GLOBALS['csstidy']['all_properties']['-webkit-transform'];
$GLOBALS['csstidy']['all_properties']['-webkit-transform-origin'];
$GLOBALS['csstidy']['all_properties']['-webkit-transform-origin-x'];
$GLOBALS['csstidy']['all_properties']['-webkit-transform-origin-y'];
$GLOBALS['csstidy']['all_properties']['-webkit-transform-origin-z'];
$GLOBALS['csstidy']['all_properties']['-webkit-transform-style'];
$GLOBALS['csstidy']['all_properties']['-webkit-transition'];
$GLOBALS['csstidy']['all_properties']['-webkit-transition-delay'];
$GLOBALS['csstidy']['all_properties']['-webkit-transition-duration'];
$GLOBALS['csstidy']['all_properties']['-webkit-transition-property'];
$GLOBALS['csstidy']['all_properties']['-webkit-transition-timing-function'];
$GLOBALS['csstidy']['all_properties']['-webkit-user-drag'];
$GLOBALS['csstidy']['all_properties']['-webkit-user-modify'];
$GLOBALS['csstidy']['all_properties']['-webkit-user-select'];

/**
 * An array containing all predefined templates.
 *
 * @global array $GLOBALS['csstidy']['predefined_templates']
 * @version 1.0
 * @see csstidy::load_template()
 */
$GLOBALS['csstidy']['predefined_templates']['default'][] = '<span class="at">'; //string before @rule
$GLOBALS['csstidy']['predefined_templates']['default'][] = '</span> <span class="format">{</span>'."\n"; //bracket after @-rule
$GLOBALS['csstidy']['predefined_templates']['default'][] = '<span class="selector">'; //string before selector
$GLOBALS['csstidy']['predefined_templates']['default'][] = '</span> <span class="format">{</span>'."\n"; //bracket after selector
$GLOBALS['csstidy']['predefined_templates']['default'][] = '<span class="property">'; //string before property
$GLOBALS['csstidy']['predefined_templates']['default'][] = '</span><span class="value">'; //string after property+before value
$GLOBALS['csstidy']['predefined_templates']['default'][] = '</span><span class="format">;</span>'."\n"; //string after value
$GLOBALS['csstidy']['predefined_templates']['default'][] = '<span class="format">}</span>'; //closing bracket - selector
$GLOBALS['csstidy']['predefined_templates']['default'][] = "\n\n"; //space between blocks {...}
$GLOBALS['csstidy']['predefined_templates']['default'][] = "\n".'<span class="format">}</span>'. "\n\n"; //closing bracket @-rule
$GLOBALS['csstidy']['predefined_templates']['default'][] = ''; //indent in @-rule
$GLOBALS['csstidy']['predefined_templates']['default'][] = '<span class="comment">'; // before comment
$GLOBALS['csstidy']['predefined_templates']['default'][] = '</span>'."\n"; // after comment
$GLOBALS['csstidy']['predefined_templates']['default'][] = "\n"; // after last line @-rule

$GLOBALS['csstidy']['predefined_templates']['highest_compression'][] = '<span class="at">';
$GLOBALS['csstidy']['predefined_templates']['highest_compression'][] = '</span><span class="format">{</span>';
$GLOBALS['csstidy']['predefined_templates']['highest_compression'][] = '<span class="selector">';
$GLOBALS['csstidy']['predefined_templates']['highest_compression'][] = '</span><span class="format">{</span>';
$GLOBALS['csstidy']['predefined_templates']['highest_compression'][] = '<span class="property">';
$GLOBALS['csstidy']['predefined_templates']['highest_compression'][] = '</span><span class="value">';
$GLOBALS['csstidy']['predefined_templates']['highest_compression'][] = '</span><span class="format">;</span>';
$GLOBALS['csstidy']['predefined_templates']['highest_compression'][] = '<span class="format">}</span>';
$GLOBALS['csstidy']['predefined_templates']['highest_compression'][] = '';
$GLOBALS['csstidy']['predefined_templates']['highest_compression'][] = '<span class="format">}</span>';
$GLOBALS['csstidy']['predefined_templates']['highest_compression'][] = '';
$GLOBALS['csstidy']['predefined_templates']['highest_compression'][] = '<span class="comment">'; // before comment
$GLOBALS['csstidy']['predefined_templates']['highest_compression'][] = '</span>'; // after comment
$GLOBALS['csstidy']['predefined_templates']['highest_compression'][] = '';