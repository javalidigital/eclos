<?php
/**
 * Define the shortcode parameters
 *
 * @package KraftiveShortcodes
 * @since 1.0
 */


/* Quote from 5 styles Config --- */

$zilla_shortcodes['folio_quote'] = array(
	'title' => __('Folio Quotes', 'tzsc'),
	'id' => 'tzsc-quote-shortcode',
	'template' => '[folio_quote {{attributes}}]',
	'params' => array(
		'style' => array(
			'type' => 'select',
			'label' => __('Style', 'tzsc'),
			'desc' => __('Select Style of Quote', 'tzsc'),
			'options' => array(
							'quote_1' => __('Style 1', 'kraftives'),
							'quote_2' => __('Style 2', 'kraftives'),
							'quote_3' => __('Style 3', 'kraftives'),
							'quote_4' => __('Style 4', 'kraftives'),
							'quote_5' => __('Style 5', 'kraftives'),
			)
		),
		'qoute_content' => array(
			'std' => 'Quote Content',
			'type' => 'textarea',
			'label' => __('Quote Content', 'tzsc'),
			'desc' => __('Enter the content of quote', 'tzsc')
		),
		'author' => array(
			'std' => 'Author Name',
			'type' => 'text',
			'label' => __('Heading Text', 'tzsc'),
			'desc' => __('Enter the name of author', 'tzsc')
		),
		)
);

/* Heading from h1-h6 Config --- */
$zilla_shortcodes['custom_heading'] = array(
	'title' => __('Folio Headings (h1-h6)', 'tzsc'),
	'id' => 'tzsc-heading-shortcode',
	'template' => '[folio_custom_heading {{attributes}}]',
	'params' => array(
		'tag_content' => array(
			'std' => 'Heading Text',
			'type' => 'text',
			'label' => __('Heading Text', 'tzsc'),
			'desc' => __('Insert heading text here', 'tzsc')
		),
		'tag' => array(
			'type' => 'select',
			'label' => __('Heading Tag', 'tzsc'),
			'desc' => __('Select heading from h1 to h6', 'tzsc'),
			'options' => array(
							'h1' => 'H1',
							'h2' => 'H2',
							'h3' => 'H3',
							'h4' => 'H4',
							'h5' => 'H5',
							'h6' => 'H6'
			)
		),
		'tag_align' => array(
			'type' => 'select',
			'label' => __('Heading Align', 'tzsc'),
			'desc' => __('Set alignment of Heading', 'tzsc'),
			'options' => array(
							'align_left' 	=> 'Left',
							'align_right' 	=> 'Right',
							'align_center' 	=> 'Center'
			)
		)
	)
);

/* Button Config --- */
$zilla_shortcodes['button'] = array(
	'title' => __('Button', 'tzsc'),
	'id' => 'tzsc-button-shortcode',
	'template' => '[vc_button {{attributes}}]',
	'params' => array(
		'title' => array(
			'std' => 'Button Text',
			'type' => 'text',
			'label' => __('Text on the button', 'tzsc'),
			'desc' => __('Add the button\'s Text eg "Learn More"', 'tzsc')
		),
		'href' => array(
			'std' => 'http://example.com',
			'type' => 'text',
			'label' => __('Button URL', 'tzsc'),
			'desc' => __('Add the button\'s url eg http://example.com', 'tzsc')
		),
		'style' => array(
			'type' => 'select',
			'label' => __('Select Style', 'tzsc'),
			'desc' => __('Select style of button', 'tzsc'),
			'options' => array(
						'folio-button' 			=> __('Orange Button', 'kraftives'), 
						'folio-button-dark'		=> __('Dark Button', 'kraftives'), 
						'folio-button-outline'	=> __('Outline Button', 'kraftives'),
			)
		),
		'folio_icons' => array(
                'std' => '',
                'type' => 'select',
                'label' => __('Button Icon', 'tzsc'),
                'desc' => __('Select Icon to display', 'tzsc'),
				'options' => smk_font_awesome()
            ),
		'size' => array(
			'type' => 'select',
			'label' => __('Button Size', 'tzsc'),
			'desc' => __('Select the button\'s size', 'tzsc'),
			'options' => array(
						''				=> __('Default', 'kraftives'), 
						'button-small' 	=> __('Small', 'kraftives'),
						'button-medium' => __('Medium', 'kraftives'),
						'button-large' 	=> __('Large', 'kraftives'),
						'button-xlarge' => __('X-large', 'kraftives'),
						'button-full' 	=> __('Full Width', 'kraftives')
			)
		),
		'target' => array(
			'type' => 'select',
			'label' => __('Button Target', 'tzsc'),
			'desc' => __('Set the browser behavior for the click action.', 'tzsc'),
			'options' => array(
				'_self' => 'Same window',
				'_blank' => 'New window'
			)
		),
		'el_class' => array(
			'std' => '',
			'type' => 'text',
			'label' => __('Extra class', 'tzsc'),
			'desc' => __('Add extra class you want to use for this button', 'tzsc')
		),
	)
);

/* Alert Config --- */
			
$zilla_shortcodes['alert'] = array(
	'title' => __('Alert', 'tzsc'),
	'id' => 'tzsc-alert-shortcode',
	'template' => '[folio_alert {{attributes}}] {{content}} [/folio_alert]',
	'params' => array(
		'style' => array(
			'type' => 'select',
			'label' => __('Alert Style', 'tzsc'),
			'desc' => __('Select the alert\'s style, ie the alert colour', 'tzsc'),
			'options' => array(
					'white' 	=> __('White Alert',"kraftives"),
					'grey' 		=> __('Grey Alert',"kraftives"),
					'red' 		=> __('Red Alert',"kraftives"),
					'yellow' 	=> __('Yellow Alert',"kraftives"),
					'green' 	=> __('Green Alert',"kraftives"),
					'blue' 		=> __('Blue Alert',"kraftives")
			)
		),
		'alert_message' => array(
			'std' => 'Your Alert!',
			'type' => 'textarea',
			'label' => __('Alert Text', 'tzsc'),
			'desc' => __('Add the alert\'s text', 'tzsc'),
		),
		'el_class' => array(
			'std' => '',
			'type' => 'text',
			'label' => __('Extra Class', 'tzsc'),
			'desc' => __('Insert extra class if you want to add', 'tzsc'),
		),

	)
);

/* Toggle Config --- */

$zilla_shortcodes['toggle'] = array(
	'title' => __('Toggle', 'tzsc'),
	'id' => 'tzsc-toggle-shortcode',
	'template' => ' {{child_shortcode}} ', // There is no wrapper shortcode
	'notes' => __('Click \'Add Toggle\' to add a new toggle. Drag and drop to reorder toggles.', 'tzsc'),
	'params' => array(),
	'child_shortcode' => array(
		'params' => array(
			'title' => array(
				'type' => 'text',
				'label' => __('Toggle Content Title', 'tzsc'),
				'desc' => __('Add the title that will go above the toggle content', 'tzsc'),
				'std' => 'Title'
			),
			'content' => array(
				'std' => 'Content',
				'type' => 'textarea',
				'label' => __('Toggle Content', 'tzsc'),
				'desc' => __('Add the toggle content. Will accept HTML', 'tzsc'),
			),
			'open' => array(
				'type' => 'select',
				'label' => __('Toggle State', 'tzsc'),
				'desc' => __('Select the state of the toggle on page load', 'tzsc'),
				'options' => array(
					'true' => 'Open',
					'false' => 'Closed'
				)
			)
		),
		'template' => '[vc_toggle {{attributes}}] {{content}} [/vc_toggle]',
		'clone_button' => __('Add Toggle', 'tzsc')
	)
);

/* Tabs Config --- */

$zilla_shortcodes['tabs'] = array(
    'title' => __('Tab', 'tzsc'),
    'id' => 'tzsc-tabs-shortcode',
    'template' => '[vc_tabs] {{child_shortcode}} [/vc_tabs]',
    'notes' => __('Click \'Add Tab\' to add a new tab. Drag and drop to reorder tabs.', 'tzsc'),
    'params' => array(),
    'child_shortcode' => array(
        'params' => array(
            'title' => array(
                'std' => 'Title',
                'type' => 'text',
                'label' => __('Tab Title', 'tzsc'),
                'desc' => __('Title of the tab.', 'tzsc'),
            ),
			'tab_id' => array(
                'std' => 'tab1',
                'type' => 'text',
                'label' => __('Tab ID', 'tzsc'),
                'desc' => __('Tab Id should be unique for every tab', 'tzsc'),
            ),
			'tab_icon' => array(
                'std' => '',
                'type' => 'select',
                'label' => __('Tab Icon', 'tzsc'),
                'desc' => __('Select Icon to display', 'tzsc'),
				'options' => smk_font_awesome()
            ),
            'content' => array(
                'std' => 'Tab Content',
                'type' => 'textarea',
                'label' => __('Tab Content', 'tzsc'),
                'desc' => __('Add the tabs content.', 'tzsc')
            )
        ),
        'template' => '[vc_tab {{attributes}}] {{content}} [/vc_tab]',
        'clone_button' => __('Add Tab', 'tzsc')
    )
);

/* Accordion Config --- */


/*[vc_accordion]
[vc_accordion_tab title="Section 1"][/vc_accordion_tab]
[vc_accordion_tab title="Section 2"][/vc_accordion_tab]
[/vc_accordion]*/

$zilla_shortcodes['accordions'] = array(
    'title' => __('Accordion', 'tzsc'),
    'id' => 'tzsc-accordion-shortcode',
    'template' => '[vc_accordion] {{child_shortcode}} [/vc_accordion]',
    'notes' => __('Click \'Add Accordion\' to add a new accordion. Drag and drop to reorder accordions.', 'tzsc'),
    'params' => array(),
    'child_shortcode' => array(
        'params' => array(
            'title' => array(
                'std' => 'Title',
                'type' => 'text',
                'label' => __('Accordion Title', 'tzsc'),
                'desc' => __('Title of the accordion.', 'tzsc'),
            ),
            'content' => array(
                'std' => 'Accordion Content',
                'type' => 'textarea',
                'label' => __('Accordion Content', 'tzsc'),
                'desc' => __('Add the accordions content.', 'tzsc')
            )
        ),
        'template' => '[vc_accordion_tab {{attributes}}] {{content}} [/vc_accordion_tab]',
        'clone_button' => __('Add Accordion', 'tzsc')
    )
);

/* Columns Config --- */

$zilla_shortcodes['columns'] = array(
	'title' => __('Columns', 'tzsc'),
	'id' => 'tzsc-columns-shortcode',
	'template' => ' {{child_shortcode}} ', // There is no wrapper shortcode
	'notes' => __('Click \'Add Column\' to add a new column. Drag and drop to reorder columns.', 'tzsc'),
	'params' => array(),
	'child_shortcode' => array(
		'params' => array(
			'column' => array(
				'type' => 'select',
				'label' => __('Column Type', 'tzsc'),
				'desc' => __('Select the width of the column.', 'tzsc'),
				'options' => array(
					'one-third' => __('One Third', 'tzsc'),
					'two-third' => __('Two Thirds', 'tzsc'),
					'one-half' => __('One Half', 'tzsc'),
					'one-fourth' => __('One Fourth', 'tzsc'),
					'three-fourth' => __('Three Fourth', 'tzsc'),
					'one-fifth' => __('One Fifth', 'tzsc'),
					'two-fifth' => __('Two Fifth', 'tzsc'),
					'three-fifth' => __('Three Fifth', 'tzsc'),
					'four-fifth' => __('Four Fifth', 'tzsc'),
					'one-sixth' => __('One Sixth', 'tzsc'),
					'five-sixth' => __('Five Sixth', 'tzsc')
				)
			),
			'last' => array(
				'type' => 'checkbox',
				'label' => __('Last column', 'tzsc'),
				'desc' => __('Set whether this is the last column.', 'tzsc'),
				'default' => false
			),
			'content' => array(
				'std' => __('Column content', 'tzsc'),
				'type' => 'textarea',
				'label' => __('Column Content', 'tzsc'),
				'desc' => __('Add the column content.', 'tzsc')
			)
		),
		'template' => '[folio_column {{attributes}}] {{content}} [/folio_column]',
		'clone_button' => __('Add Column', 'tzsc')
	)
);


//if( ! function_exists('smk_font_awesome'){
function smk_font_awesome(){
		return array(
		''	=> 'No Icon',
		'fa-adjust' => 'Adjust',
		'fa-adn' => 'Adn',
		'fa-align-center' => 'Align center',
		'fa-align-justify' => 'Align justify',
		'fa-align-left' => 'Align left',
		'fa-align-right' => 'Align right',
		'fa-ambulance' => 'Ambulance',
		'fa-anchor' => 'Anchor',
		'fa-android' => 'Android',
		'fa-angellist' => 'Angellist',
		'fa-angle-double-down' => 'Angle double down',
		'fa-angle-double-left' => 'Angle double left',
		'fa-angle-double-right' => 'Angle double right',
		'fa-angle-double-up' => 'Angle double up',
		'fa-angle-down' => 'Angle down',
		'fa-angle-left' => 'Angle left',
		'fa-angle-right' => 'Angle right',
		'fa-angle-up' => 'Angle up',
		'fa-apple' => 'Apple',
		'fa-archive' => 'Archive',
		'fa-area-chart' => 'Area chart',
		'fa-arrow-circle-down' => 'Arrow circle down',
		'fa-arrow-circle-left' => 'Arrow circle left',
		'fa-arrow-circle-o-down' => 'Arrow circle o down',
		'fa-arrow-circle-o-left' => 'Arrow circle o left',
		'fa-arrow-circle-o-right' => 'Arrow circle o right',
		'fa-arrow-circle-o-up' => 'Arrow circle o up',
		'fa-arrow-circle-right' => 'Arrow circle right',
		'fa-arrow-circle-up' => 'Arrow circle up',
		'fa-arrow-down' => 'Arrow down',
		'fa-arrow-left' => 'Arrow left',
		'fa-arrow-right' => 'Arrow right',
		'fa-arrow-up' => 'Arrow up',
		'fa-arrows' => 'Arrows',
		'fa-arrows-alt' => 'Arrows alt',
		'fa-arrows-h' => 'Arrows h',
		'fa-arrows-v' => 'Arrows v',
		'fa-asterisk' => 'Asterisk',
		'fa-at' => 'At',
		'fa-backward' => 'Backward',
		'fa-ban' => 'Ban',
		'fa-bar-chart' => 'Bar chart',
		'fa-barcode' => 'Barcode',
		'fa-bars' => 'Bars',
		'fa-beer' => 'Beer',
		'fa-behance' => 'Behance',
		'fa-behance-square' => 'Behance square',
		'fa-bell' => 'Bell',
		'fa-bell-o' => 'Bell o',
		'fa-bell-slash' => 'Bell slash',
		'fa-bell-slash-o' => 'Bell slash o',
		'fa-bicycle' => 'Bicycle',
		'fa-binoculars' => 'Binoculars',
		'fa-birthday-cake' => 'Birthday cake',
		'fa-bitbucket' => 'Bitbucket',
		'fa-bitbucket-square' => 'Bitbucket square',
		'fa-bold' => 'Bold',
		'fa-bolt' => 'Bolt',
		'fa-bomb' => 'Bomb',
		'fa-book' => 'Book',
		'fa-bookmark' => 'Bookmark',
		'fa-bookmark-o' => 'Bookmark o',
		'fa-briefcase' => 'Briefcase',
		'fa-btc' => 'Btc',
		'fa-bug' => 'Bug',
		'fa-building' => 'Building',
		'fa-building-o' => 'Building o',
		'fa-bullhorn' => 'Bullhorn',
		'fa-bullseye' => 'Bullseye',
		'fa-bus' => 'Bus',
		'fa-calculator' => 'Calculator',
		'fa-calendar' => 'Calendar',
		'fa-calendar-o' => 'Calendar o',
		'fa-camera' => 'Camera',
		'fa-camera-retro' => 'Camera retro',
		'fa-car' => 'Car',
		'fa-caret-down' => 'Caret down',
		'fa-caret-left' => 'Caret left',
		'fa-caret-right' => 'Caret right',
		'fa-caret-square-o-down' => 'Caret square o down',
		'fa-caret-square-o-left' => 'Caret square o left',
		'fa-caret-square-o-right' => 'Caret square o right',
		'fa-caret-square-o-up' => 'Caret square o up',
		'fa-caret-up' => 'Caret up',
		'fa-cc' => 'Cc',
		'fa-cc-amex' => 'Cc amex',
		'fa-cc-discover' => 'Cc discover',
		'fa-cc-mastercard' => 'Cc mastercard',
		'fa-cc-paypal' => 'Cc paypal',
		'fa-cc-stripe' => 'Cc stripe',
		'fa-cc-visa' => 'Cc visa',
		'fa-certificate' => 'Certificate',
		'fa-chain-broken' => 'Chain broken',
		'fa-check' => 'Check',
		'fa-check-circle' => 'Check circle',
		'fa-check-circle-o' => 'Check circle o',
		'fa-check-square' => 'Check square',
		'fa-check-square-o' => 'Check square o',
		'fa-chevron-circle-down' => 'Chevron circle down',
		'fa-chevron-circle-left' => 'Chevron circle left',
		'fa-chevron-circle-right' => 'Chevron circle right',
		'fa-chevron-circle-up' => 'Chevron circle up',
		'fa-chevron-down' => 'Chevron down',
		'fa-chevron-left' => 'Chevron left',
		'fa-chevron-right' => 'Chevron right',
		'fa-chevron-up' => 'Chevron up',
		'fa-child' => 'Child',
		'fa-circle' => 'Circle',
		'fa-circle-o' => 'Circle o',
		'fa-circle-o-notch' => 'Circle o notch',
		'fa-circle-thin' => 'Circle thin',
		'fa-clipboard' => 'Clipboard',
		'fa-clock-o' => 'Clock o',
		'fa-cloud' => 'Cloud',
		'fa-cloud-download' => 'Cloud download',
		'fa-cloud-upload' => 'Cloud upload',
		'fa-code' => 'Code',
		'fa-code-fork' => 'Code fork',
		'fa-codepen' => 'Codepen',
		'fa-coffee' => 'Coffee',
		'fa-cog' => 'Cog',
		'fa-cogs' => 'Cogs',
		'fa-columns' => 'Columns',
		'fa-comment' => 'Comment',
		'fa-comment-o' => 'Comment o',
		'fa-comments' => 'Comments',
		'fa-comments-o' => 'Comments o',
		'fa-compass' => 'Compass',
		'fa-compress' => 'Compress',
		'fa-copyright' => 'Copyright',
		'fa-credit-card' => 'Credit card',
		'fa-crop' => 'Crop',
		'fa-crosshairs' => 'Crosshairs',
		'fa-css3' => 'Css3',
		'fa-cube' => 'Cube',
		'fa-cubes' => 'Cubes',
		'fa-cutlery' => 'Cutlery',
		'fa-database' => 'Database',
		'fa-delicious' => 'Delicious',
		'fa-desktop' => 'Desktop',
		'fa-deviantart' => 'Deviantart',
		'fa-digg' => 'Digg',
		'fa-dot-circle-o' => 'Dot circle o',
		'fa-download' => 'Download',
		'fa-dribbble' => 'Dribbble',
		'fa-dropbox' => 'Dropbox',
		'fa-drupal' => 'Drupal',
		'fa-eject' => 'Eject',
		'fa-ellipsis-h' => 'Ellipsis h',
		'fa-ellipsis-v' => 'Ellipsis v',
		'fa-empire' => 'Empire',
		'fa-envelope' => 'Envelope',
		'fa-envelope-o' => 'Envelope o',
		'fa-envelope-square' => 'Envelope square',
		'fa-eraser' => 'Eraser',
		'fa-eur' => 'Eur',
		'fa-exchange' => 'Exchange',
		'fa-exclamation' => 'Exclamation',
		'fa-exclamation-circle' => 'Exclamation circle',
		'fa-exclamation-triangle' => 'Exclamation triangle',
		'fa-expand' => 'Expand',
		'fa-external-link' => 'External link',
		'fa-external-link-square' => 'External link square',
		'fa-eye' => 'Eye',
		'fa-eye-slash' => 'Eye slash',
		'fa-eyedropper' => 'Eyedropper',
		'fa-facebook' => 'Facebook',
		'fa-facebook-square' => 'Facebook square',
		'fa-fast-backward' => 'Fast backward',
		'fa-fast-forward' => 'Fast forward',
		'fa-fax' => 'Fax',
		'fa-female' => 'Female',
		'fa-fighter-jet' => 'Fighter jet',
		'fa-file' => 'File',
		'fa-file-archive-o' => 'File archive o',
		'fa-file-audio-o' => 'File audio o',
		'fa-file-code-o' => 'File code o',
		'fa-file-excel-o' => 'File excel o',
		'fa-file-image-o' => 'File image o',
		'fa-file-o' => 'File o',
		'fa-file-pdf-o' => 'File pdf o',
		'fa-file-powerpoint-o' => 'File powerpoint o',
		'fa-file-text' => 'File text',
		'fa-file-text-o' => 'File text o',
		'fa-file-video-o' => 'File video o',
		'fa-file-word-o' => 'File word o',
		'fa-files-o' => 'Files o',
		'fa-film' => 'Film',
		'fa-filter' => 'Filter',
		'fa-fire' => 'Fire',
		'fa-fire-extinguisher' => 'Fire extinguisher',
		'fa-flag' => 'Flag',
		'fa-flag-checkered' => 'Flag checkered',
		'fa-flag-o' => 'Flag o',
		'fa-flask' => 'Flask',
		'fa-flickr' => 'Flickr',
		'fa-floppy-o' => 'Floppy o',
		'fa-folder' => 'Folder',
		'fa-folder-o' => 'Folder o',
		'fa-folder-open' => 'Folder open',
		'fa-folder-open-o' => 'Folder open o',
		'fa-font' => 'Font',
		'fa-forward' => 'Forward',
		'fa-foursquare' => 'Foursquare',
		'fa-frown-o' => 'Frown o',
		'fa-futbol-o' => 'Futbol o',
		'fa-gamepad' => 'Gamepad',
		'fa-gavel' => 'Gavel',
		'fa-gbp' => 'Gbp',
		'fa-gift' => 'Gift',
		'fa-git' => 'Git',
		'fa-git-square' => 'Git square',
		'fa-github' => 'Github',
		'fa-github-alt' => 'Github alt',
		'fa-github-square' => 'Github square',
		'fa-gittip' => 'Gittip',
		'fa-glass' => 'Glass',
		'fa-globe' => 'Globe',
		'fa-google' => 'Google',
		'fa-google-plus' => 'Google plus',
		'fa-google-plus-square' => 'Google plus square',
		'fa-google-wallet' => 'Google wallet',
		'fa-graduation-cap' => 'Graduation cap',
		'fa-h-square' => 'H square',
		'fa-hacker-news' => 'Hacker news',
		'fa-hand-o-down' => 'Hand o down',
		'fa-hand-o-left' => 'Hand o left',
		'fa-hand-o-right' => 'Hand o right',
		'fa-hand-o-up' => 'Hand o up',
		'fa-hdd-o' => 'Hdd o',
		'fa-header' => 'Header',
		'fa-headphones' => 'Headphones',
		'fa-heart' => 'Heart',
		'fa-heart-o' => 'Heart o',
		'fa-history' => 'History',
		'fa-home' => 'Home',
		'fa-hospital-o' => 'Hospital o',
		'fa-html5' => 'Html5',
		'fa-ils' => 'Ils',
		'fa-inbox' => 'Inbox',
		'fa-indent' => 'Indent',
		'fa-info' => 'Info',
		'fa-info-circle' => 'Info circle',
		'fa-inr' => 'Inr',
		'fa-instagram' => 'Instagram',
		
		'fa-ioxhost' => 'Ioxhost',
		'fa-italic' => 'Italic',
		'fa-joomla' => 'Joomla',
		'fa-jpy' => 'Jpy',
		'fa-jsfiddle' => 'Jsfiddle',
		'fa-key' => 'Key',
		'fa-keyboard-o' => 'Keyboard o',
		'fa-krw' => 'Krw',
		'fa-language' => 'Language',
		'fa-laptop' => 'Laptop',
		'fa-lastfm' => 'Lastfm',
		'fa-lastfm-square' => 'Lastfm square',
		'fa-leaf' => 'Leaf',
		'fa-lemon-o' => 'Lemon o',
		'fa-level-down' => 'Level down',
		'fa-level-up' => 'Level up',
		'fa-life-ring' => 'Life ring',
		'fa-lightbulb-o' => 'Lightbulb o',
		'fa-line-chart' => 'Line chart',
		'fa-link' => 'Link',
		'fa-linkedin' => 'Linkedin',
		'fa-linkedin-square' => 'Linkedin square',
		'fa-linux' => 'Linux',
		'fa-list' => 'List',
		'fa-list-alt' => 'List alt',
		'fa-list-ol' => 'List ol',
		'fa-list-ul' => 'List ul',
		'fa-location-arrow' => 'Location arrow',
		'fa-lock' => 'Lock',
		'fa-long-arrow-down' => 'Long arrow down',
		'fa-long-arrow-left' => 'Long arrow left',
		'fa-long-arrow-right' => 'Long arrow right',
		'fa-long-arrow-up' => 'Long arrow up',
		'fa-magic' => 'Magic',
		'fa-magnet' => 'Magnet',
		'fa-male' => 'Male',
		'fa-map-marker' => 'Map marker',
		'fa-maxcdn' => 'Maxcdn',
		'fa-meanpath' => 'Meanpath',
		'fa-medkit' => 'Medkit',
		'fa-meh-o' => 'Meh o',
		'fa-microphone' => 'Microphone',
		'fa-microphone-slash' => 'Microphone slash',
		'fa-minus' => 'Minus',
		'fa-minus-circle' => 'Minus circle',
		'fa-minus-square' => 'Minus square',
		'fa-minus-square-o' => 'Minus square o',
		'fa-mobile' => 'Mobile',
		'fa-money' => 'Money',
		'fa-moon-o' => 'Moon o',
		'fa-music' => 'Music',
		'fa-newspaper-o' => 'Newspaper o',
		'fa-openid' => 'Openid',
		'fa-outdent' => 'Outdent',
		'fa-pagelines' => 'Pagelines',
		'fa-paint-brush' => 'Paint brush',
		'fa-paper-plane' => 'Paper plane',
		'fa-paper-plane-o' => 'Paper plane o',
		'fa-paperclip' => 'Paperclip',
		'fa-paragraph' => 'Paragraph',
		'fa-pause' => 'Pause',
		'fa-paw' => 'Paw',
		'fa-paypal' => 'Paypal',
		'fa-pencil' => 'Pencil',
		'fa-pencil-square' => 'Pencil square',
		'fa-pencil-square-o' => 'Pencil square o',
		'fa-phone' => 'Phone',
		'fa-phone-square' => 'Phone square',
		'fa-picture-o' => 'Picture o',
		'fa-pie-chart' => 'Pie chart',
		'fa-pied-piper' => 'Pied piper',
		'fa-pied-piper-alt' => 'Pied piper alt',
		'fa-pinterest' => 'Pinterest',
		'fa-pinterest-square' => 'Pinterest square',
		'fa-plane' => 'Plane',
		'fa-play' => 'Play',
		'fa-play-circle' => 'Play circle',
		'fa-play-circle-o' => 'Play circle o',
		'fa-plug' => 'Plug',
		'fa-plus' => 'Plus',
		'fa-plus-circle' => 'Plus circle',
		'fa-plus-square' => 'Plus square',
		'fa-plus-square-o' => 'Plus square o',
		'fa-power-off' => 'Power off',
		'fa-print' => 'Print',
		'fa-puzzle-piece' => 'Puzzle piece',
		'fa-qq' => 'Qq',
		'fa-qrcode' => 'Qrcode',
		'fa-question' => 'Question',
		'fa-question-circle' => 'Question circle',
		'fa-quote-left' => 'Quote left',
		'fa-quote-right' => 'Quote right',
		'fa-random' => 'Random',
		'fa-rebel' => 'Rebel',
		'fa-recycle' => 'Recycle',
		'fa-reddit' => 'Reddit',
		'fa-reddit-square' => 'Reddit square',
		'fa-refresh' => 'Refresh',
		'fa-renren' => 'Renren',
		'fa-repeat' => 'Repeat',
		'fa-reply' => 'Reply',
		'fa-reply-all' => 'Reply all',
		'fa-retweet' => 'Retweet',
		'fa-road' => 'Road',
		'fa-rocket' => 'Rocket',
		'fa-rss' => 'Rss',
		'fa-rss-square' => 'Rss square',
		'fa-rub' => 'Rub',
		'fa-scissors' => 'Scissors',
		'fa-search' => 'Search',
		'fa-search-minus' => 'Search minus',
		'fa-search-plus' => 'Search plus',
		'fa-share' => 'Share',
		'fa-share-alt' => 'Share alt',
		'fa-share-alt-square' => 'Share alt square',
		'fa-share-square' => 'Share square',
		'fa-share-square-o' => 'Share square o',
		'fa-shield' => 'Shield',
		'fa-shopping-cart' => 'Shopping cart',
		'fa-sign-in' => 'Sign in',
		'fa-sign-out' => 'Sign out',
		'fa-signal' => 'Signal',
		'fa-sitemap' => 'Sitemap',
		'fa-skype' => 'Skype',
		'fa-slack' => 'Slack',
		'fa-sliders' => 'Sliders',
		'fa-slideshare' => 'Slideshare',
		'fa-smile-o' => 'Smile o',
		'fa-sort' => 'Sort',
		'fa-sort-alpha-asc' => 'Sort alpha asc',
		'fa-sort-alpha-desc' => 'Sort alpha desc',
		'fa-sort-amount-asc' => 'Sort amount asc',
		'fa-sort-amount-desc' => 'Sort amount desc',
		'fa-sort-asc' => 'Sort asc',
		'fa-sort-desc' => 'Sort desc',
		'fa-sort-numeric-asc' => 'Sort numeric asc',
		'fa-sort-numeric-desc' => 'Sort numeric desc',
		'fa-soundcloud' => 'Soundcloud',
		'fa-space-shuttle' => 'Space shuttle',
		'fa-spinner' => 'Spinner',
		'fa-spoon' => 'Spoon',
		'fa-spotify' => 'Spotify',
		'fa-square' => 'Square',
		'fa-square-o' => 'Square o',
		'fa-stack-exchange' => 'Stack exchange',
		'fa-stack-overflow' => 'Stack overflow',
		'fa-star' => 'Star',
		'fa-star-half' => 'Star half',
		'fa-star-half-o' => 'Star half o',
		'fa-star-o' => 'Star o',
		'fa-steam' => 'Steam',
		'fa-steam-square' => 'Steam square',
		'fa-step-backward' => 'Step backward',
		'fa-step-forward' => 'Step forward',
		'fa-stethoscope' => 'Stethoscope',
		'fa-stop' => 'Stop',
		'fa-strikethrough' => 'Strikethrough',
		'fa-stumbleupon' => 'Stumbleupon',
		'fa-stumbleupon-circle' => 'Stumbleupon circle',
		'fa-subscript' => 'Subscript',
		'fa-suitcase' => 'Suitcase',
		'fa-sun-o' => 'Sun o',
		'fa-superscript' => 'Superscript',
		'fa-table' => 'Table',
		'fa-tablet' => 'Tablet',
		'fa-tachometer' => 'Tachometer',
		'fa-tag' => 'Tag',
		'fa-tags' => 'Tags',
		'fa-tasks' => 'Tasks',
		'fa-taxi' => 'Taxi',
		'fa-tencent-weibo' => 'Tencent weibo',
		'fa-terminal' => 'Terminal',
		'fa-text-height' => 'Text height',
		'fa-text-width' => 'Text width',
		'fa-th' => 'Th',
		'fa-th-large' => 'Th large',
		'fa-th-list' => 'Th list',
		'fa-thumb-tack' => 'Thumb tack',
		'fa-thumbs-down' => 'Thumbs down',
		'fa-thumbs-o-down' => 'Thumbs o down',
		'fa-thumbs-o-up' => 'Thumbs o up',
		'fa-thumbs-up' => 'Thumbs up',
		'fa-ticket' => 'Ticket',
		'fa-times' => 'Times',
		'fa-times-circle' => 'Times circle',
		'fa-times-circle-o' => 'Times circle o',
		'fa-tint' => 'Tint',
		'fa-toggle-off' => 'Toggle off',
		'fa-toggle-on' => 'Toggle on',
		'fa-trash' => 'Trash',
		'fa-trash-o' => 'Trash o',
		'fa-tree' => 'Tree',
		'fa-trello' => 'Trello',
		'fa-trophy' => 'Trophy',
		'fa-truck' => 'Truck',
		'fa-try' => 'Try',
		'fa-tty' => 'Tty',
		'fa-tumblr' => 'Tumblr',
		'fa-tumblr-square' => 'Tumblr square',
		'fa-twitch' => 'Twitch',
		'fa-twitter' => 'Twitter',
		'fa-twitter-square' => 'Twitter square',
		'fa-umbrella' => 'Umbrella',
		'fa-underline' => 'Underline',
		'fa-undo' => 'Undo',
		'fa-university' => 'University',
		'fa-unlock' => 'Unlock',
		'fa-unlock-alt' => 'Unlock alt',
		'fa-upload' => 'Upload',
		'fa-usd' => 'Usd',
		'fa-user' => 'User',
		'fa-user-md' => 'User md',
		'fa-users' => 'Users',
		'fa-video-camera' => 'Video camera',
		'fa-vimeo-square' => 'Vimeo square',
		'fa-vine' => 'Vine',
		'fa-vk' => 'Vk',
		'fa-volume-down' => 'Volume down',
		'fa-volume-off' => 'Volume off',
		'fa-volume-up' => 'Volume up',
		'fa-weibo' => 'Weibo',
		'fa-weixin' => 'Weixin',
		'fa-wheelchair' => 'Wheelchair',
		'fa-wifi' => 'Wifi',
		'fa-windows' => 'Windows',
		'fa-wordpress' => 'Wordpress',
		'fa-wrench' => 'Wrench',
		'fa-xing' => 'Xing',
		'fa-xing-square' => 'Xing square',
		'fa-yahoo' => 'Yahoo',
		'fa-yelp' => 'Yelp',
		'fa-youtube' => 'Youtube',
		'fa-youtube-play' => 'Youtube play',
		'fa-youtube-square' => 'Youtube square',
);
}


//}
?>