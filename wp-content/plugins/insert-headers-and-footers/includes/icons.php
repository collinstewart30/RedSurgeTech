<?php
/**
 * Handle all svg icons in one place.
 *
 * @package WPCode
 */

/**
 * Get an SVG icon by name with width, height and viewbox options.
 *
 * @param string $name The name of the icon.
 * @param int    $width The width.
 * @param int    $height The height.
 * @param string $viewbox The viewbox, will be auto-built from width and height if not set.
 *
 * @return string
 */
function get_wpcode_icon( $name, $width = 20, $height = 20, $viewbox = '' ) {
	$icons = wpcode_icons();

	if ( ! isset( $icons[ $name ] ) ) {
		return '';
	}

	if ( empty( $viewbox ) ) {
		$viewbox = sprintf( '0 0 %1$s %2$s', $width, $height );
	}

	return sprintf(
		'<svg class="wpcode-icon wpcode-icon-%5$s" width="%1$s" height="%2$s" viewBox="%3$s" fill="none" xmlns="http://www.w3.org/2000/svg">%4$s</svg>',
		$width,
		$height,
		$viewbox,
		$icons[ $name ],
		$name
	);
}

/**
 * Echo an icon in a safe mode.
 *
 * @param string $name The name of the icon.
 * @param int    $width The width.
 * @param int    $height The height.
 * @param string $viewbox The viewbox, will be auto-built from width and height if not set.
 *
 * @return void
 */
function wpcode_icon( $name, $width = 20, $height = 20, $viewbox = '' ) {
	$icon = get_wpcode_icon( $name, $width, $height, $viewbox );

	if ( ! empty( $icon ) ) {
		echo wp_kses(
			$icon,
			array(
				'svg'    => array(
					'class'           => true,
					'aria-hidden'     => true,
					'aria-labelledby' => true,
					'role'            => true,
					'xmlns'           => true,
					'width'           => true,
					'height'          => true,
					'viewbox'         => true,
				),
				'g'      => array( 'fill' => true ),
				'title'  => array( 'title' => true ),
				'path'   => array(
					'd'         => true,
					'fill'      => true,
					'fill-rule' => true,
					'clip-rule' => true,
				),
				'circle' => array(
					'cx'           => true,
					'cy'           => true,
					'r'            => true,
					'stroke'       => true,
					'stroke-width' => true,
					'fill'         => true,
				),
				'rect'   => array(
					'x'      => true,
					'y'      => true,
					'width'  => true,
					'height' => true,
					'fill'   => true,
				),
			)
		);
	}
}

/**
 * Get the whole array of WPCode SVG icons.
 *
 * @return array
 */
function wpcode_icons() {
	return (array) apply_filters(
		'wpcode_icons',
		array(
			'logo'        => '<path fill-rule="evenodd" clip-rule="evenodd" d="M57.5706 64H6.56732C2.89985 64 0 61.1064 0 57.4468V6.55319C0 2.89362 2.89985 0 6.56732 0H57.5706C61.2381 0 64.1379 2.89362 64.1379 6.55319V57.4468C64.1379 61.1064 61.2381 64 57.5706 64ZM15.863 52.0855C15.5219 52.0855 15.0954 52.0004 14.7543 51.9153C13.2191 51.3196 12.4515 49.6175 13.0485 48.0855L26.439 13.7877C27.036 12.2558 28.7418 11.4898 30.277 12.0855C31.8122 12.6813 32.5798 14.3834 31.9828 15.9153L18.6776 50.2132C18.2512 51.4047 17.0571 52.0855 15.863 52.0855ZM35.0534 47.7445C35.6504 48.3403 36.418 48.5956 37.1856 48.5956C37.9532 48.5956 38.7208 48.3403 39.3179 47.7445L49.8085 37.3616C51.6849 35.4892 51.6849 32.3403 49.8085 30.468L39.3179 19.9999C38.2091 18.8084 36.3327 18.8084 35.1386 19.9999C33.9446 21.1063 33.9446 22.9786 35.1386 24.1701L44.7764 33.8722L35.0534 43.5743C33.8593 44.6807 33.8593 46.5531 35.0534 47.7445Z" fill="white"/>',
			'auto'        => '<path d="M9.36005 5.61394V8.56131L13.64 4.63148L9.36005 0.70166V3.64903C4.63065 3.64903 0.800049 7.16622 0.800049 11.5087C0.800049 13.0511 1.29225 14.4855 2.12685 15.6939L3.68905 14.2596C3.20755 13.4441 2.94005 12.501 2.94005 11.5087C2.94005 8.25675 5.81835 5.61394 9.36005 5.61394ZM16.5932 7.32341L15.031 8.7578C15.5018 9.58306 15.78 10.5164 15.78 11.5087C15.78 14.7606 12.9017 17.4034 9.36005 17.4034V14.456L5.08005 18.3859L9.36005 22.3157V19.3683C14.0894 19.3683 17.92 15.8511 17.92 11.5087C17.92 9.96622 17.4278 8.53183 16.5932 7.32341Z" fill="#454545"/>',
			'shortcode'   => '<path d="M0 0.137207H4.47458V1.89055H2.40664V14.2398H4.47458V16.0016H0V0.137207Z" fill="#454545"/><path d="M13.885 0.137207H16.2713L10.5019 16.0016H8.13574L13.885 0.137207Z" fill="#454545"/><path d="M24 0.137207H19.5254V1.89055H21.5934V14.2398H19.5254V16.0016H24V0.137207Z" fill="#454545"/>',
			'copy'        => '<path d="M10.8125 1.125H3.3125C2.625 1.125 2.0625 1.6875 2.0625 2.375V11.125H3.3125V2.375H10.8125V1.125ZM12.6875 3.625H5.8125C5.125 3.625 4.5625 4.1875 4.5625 4.875V13.625C4.5625 14.3125 5.125 14.875 5.8125 14.875H12.6875C13.375 14.875 13.9375 14.3125 13.9375 13.625V4.875C13.9375 4.1875 13.375 3.625 12.6875 3.625ZM12.6875 13.625H5.8125V4.875H12.6875V13.625Z" fill="#777777"/>',
			'check'       => '<path d="M5.8002 10.9L1.6002 6.70005L0.200195 8.10005L5.8002 13.7L17.8002 1.70005L16.4002 0.300049L5.8002 10.9Z" fill="#777777"/>',
			'remove'      => '<circle cx="10" cy="10" r="9" stroke="#777777" stroke-width="2"/><rect x="4.6156" y="9.23071" width="10.7692" height="1.53846" fill="#777777"/>',
			'search'      => '<path d="M11.1292 9.87907H10.4709L10.2375 9.65407C11.0542 8.70407 11.5459 7.47074 11.5459 6.12907C11.5459 3.1374 9.12086 0.712402 6.12919 0.712402C3.13752 0.712402 0.712524 3.1374 0.712524 6.12907C0.712524 9.12074 3.13752 11.5457 6.12919 11.5457C7.47086 11.5457 8.70419 11.0541 9.65419 10.2374L9.87919 10.4707V11.1291L14.0459 15.2874L15.2875 14.0457L11.1292 9.87907ZM6.12919 9.87907C4.05419 9.87907 2.37919 8.20407 2.37919 6.12907C2.37919 4.05407 4.05419 2.37907 6.12919 2.37907C8.20419 2.37907 9.87919 4.05407 9.87919 6.12907C9.87919 8.20407 8.20419 9.87907 6.12919 9.87907Z" fill="#BBBBBB"/>',
			'close'       => '<path d="M14.5649 1.41L13.1587 0L7.58348 5.59L2.00831 0L0.602051 1.41L6.17722 7L0.602051 12.59L2.00831 14L7.58348 8.41L13.1587 14L14.5649 12.59L8.98974 7L14.5649 1.41Z" fill="#8C8F9A"/>',
			'upload'      => '<path d="M10.5 8.25V10.5H1.5V8.25H0V10.5C0 11.325 0.675 12 1.5 12H10.5C11.325 12 12 11.325 12 10.5V8.25H10.5ZM2.25 3.75L3.3075 4.8075L5.25 2.8725V9H6.75V2.8725L8.6925 4.8075L9.75 3.75L6 0L2.25 3.75Z" fill="#777777"/>',
			'folder'      => '<path d="M10.2266 3.00016L12.8933 5.66683H24.6666V19.0002H3.33329V3.00016H10.2266ZM11.3333 0.333496H3.33329C1.86663 0.333496 0.679959 1.5335 0.679959 3.00016L0.666626 19.0002C0.666626 20.4668 1.86663 21.6668 3.33329 21.6668H24.6666C26.1333 21.6668 27.3333 20.4668 27.3333 19.0002V5.66683C27.3333 4.20016 26.1333 3.00016 24.6666 3.00016H14L11.3333 0.333496Z" fill="#777777"/>',
			'arrow'       => '<path d="M1.94006 0L0.0600586 1.88L6.16673 8L0.0600586 14.12L1.94006 16L9.94006 8L1.94006 0Z" fill="#777777"/>',
			'file-text'   => '<path d="M13.8333 2.16667V13.8333H2.16667V2.16667H13.8333ZM13.8333 0.5H2.16667C1.25 0.5 0.5 1.25 0.5 2.16667V13.8333C0.5 14.75 1.25 15.5 2.16667 15.5H13.8333C14.75 15.5 15.5 14.75 15.5 13.8333V2.16667C15.5 1.25 14.75 0.5 13.8333 0.5Z" fill="#DDDDDD"/><path d="M9.66667 12.1667H3.83333V10.5H9.66667V12.1667ZM12.1667 8.83333H3.83333V7.16667H12.1667V8.83333ZM12.1667 5.5H3.83333V3.83333H12.1667V5.5Z" fill="#DDDDDD"/>',
			'help'        => '<path fill-rule="evenodd" clip-rule="evenodd" d="M2.16667 9.99984C2.16667 5.39984 5.90001 1.6665 10.5 1.6665C15.1 1.6665 18.8333 5.39984 18.8333 9.99984C18.8333 14.5998 15.1 18.3332 10.5 18.3332C5.90001 18.3332 2.16667 14.5998 2.16667 9.99984ZM11.3333 13.3332V14.9998H9.66667V13.3332H11.3333ZM10.5 16.6665C6.82501 16.6665 3.83334 13.6748 3.83334 9.99984C3.83334 6.32484 6.82501 3.33317 10.5 3.33317C14.175 3.33317 17.1667 6.32484 17.1667 9.99984C17.1667 13.6748 14.175 16.6665 10.5 16.6665ZM7.16667 8.33317C7.16667 6.4915 8.65834 4.99984 10.5 4.99984C12.3417 4.99984 13.8333 6.4915 13.8333 8.33317C13.8333 9.40227 13.175 9.9776 12.534 10.5378C11.9259 11.0692 11.3333 11.587 11.3333 12.4998H9.66667C9.66667 10.9821 10.4518 10.3803 11.142 9.85123C11.6835 9.43618 12.1667 9.06585 12.1667 8.33317C12.1667 7.4165 11.4167 6.6665 10.5 6.6665C9.58334 6.6665 8.83334 7.4165 8.83334 8.33317H7.16667Z" fill="#777777"/>',
			'inbox'       => '<path fill-rule="evenodd" clip-rule="evenodd" d="M13.3333 0.5H1.66667C0.75 0.5 0 1.25 0 2.16667V13.8333C0 14.75 0.741667 15.5 1.66667 15.5H13.3333C14.25 15.5 15 14.75 15 13.8333V2.16667C15 1.25 14.25 0.5 13.3333 0.5ZM13.3333 13.8333H1.66667V11.3333H4.63333C5.20833 12.325 6.275 13 7.50833 13C8.74167 13 9.8 12.325 10.3833 11.3333H13.3333V13.8333ZM9.175 9.66667H13.3333V2.16667H1.66667V9.66667H5.84167C5.84167 10.5833 6.59167 11.3333 7.50833 11.3333C8.425 11.3333 9.175 10.5833 9.175 9.66667Z" fill="#777777"/>',
			'info'        => '<path d="M7.66667 4.33333H9.33334V6H7.66667V4.33333ZM7.66667 7.66666H9.33334V12.6667H7.66667V7.66666ZM8.50001 0.166664C3.90001 0.166664 0.166672 3.9 0.166672 8.5C0.166672 13.1 3.90001 16.8333 8.50001 16.8333C13.1 16.8333 16.8333 13.1 16.8333 8.5C16.8333 3.9 13.1 0.166664 8.50001 0.166664ZM8.50001 15.1667C4.82501 15.1667 1.83334 12.175 1.83334 8.5C1.83334 4.825 4.82501 1.83333 8.50001 1.83333C12.175 1.83333 15.1667 4.825 15.1667 8.5C15.1667 12.175 12.175 15.1667 8.50001 15.1667Z" fill="#EBAD35"/>',
			'success'     => '<path d="M8.50001 0.666656C3.90001 0.666656 0.166672 4.39999 0.166672 8.99999C0.166672 13.6 3.90001 17.3333 8.50001 17.3333C13.1 17.3333 16.8333 13.6 16.8333 8.99999C16.8333 4.39999 13.1 0.666656 8.50001 0.666656ZM8.50001 15.6667C4.82501 15.6667 1.83334 12.675 1.83334 8.99999C1.83334 5.32499 4.82501 2.33332 8.50001 2.33332C12.175 2.33332 15.1667 5.32499 15.1667 8.99999C15.1667 12.675 12.175 15.6667 8.50001 15.6667ZM12.325 5.31666L6.83334 10.8083L4.675 8.65832L3.50001 9.83332L6.83334 13.1667L13.5 6.49999L12.325 5.31666Z" fill="#09A347"/>',
			'warning'     => '<path d="M12.73 0H5.27L0 5.27V12.73L5.27 18H12.73L18 12.73V5.27L12.73 0ZM16 11.9L11.9 16H6.1L2 11.9V6.1L6.1 2H11.9L16 6.1V11.9ZM11.83 4.76L9 7.59L6.17 4.76L4.76 6.17L7.59 9L4.76 11.83L6.17 13.24L9 10.41L11.83 13.24L13.24 11.83L10.41 9L13.24 6.17L11.83 4.76Z" fill="#DF2A35"/>',
			'file'        => '<path d="M28 4H12C9.8 4 8.02 5.8 8.02 8L8 40C8 42.2 9.78 44 11.98 44H36C38.2 44 40 42.2 40 40V16L28 4ZM12 40V8H26V18H36V40H12Z" fill="#777777"/>',
			'support'     => '<path d="M24 4C12.96 4 4 12.96 4 24C4 35.04 12.96 44 24 44C35.04 44 44 35.04 44 24C44 12.96 35.04 4 24 4ZM38.92 18.24L33.36 20.54C32.34 17.82 30.2 15.66 27.46 14.66L29.76 9.1C33.96 10.7 37.3 14.04 38.92 18.24ZM24 30C20.68 30 18 27.32 18 24C18 20.68 20.68 18 24 18C27.32 18 30 20.68 30 24C30 27.32 27.32 30 24 30ZM18.26 9.08L20.6 14.64C17.84 15.64 15.66 17.82 14.64 20.58L9.08 18.26C10.7 14.04 14.04 10.7 18.26 9.08ZM9.08 29.74L14.64 27.44C15.66 30.2 17.82 32.36 20.58 33.36L18.24 38.92C14.04 37.3 10.7 33.96 9.08 29.74ZM29.76 38.92L27.46 33.36C30.2 32.34 32.36 30.18 33.36 27.42L38.92 29.76C37.3 33.96 33.96 37.3 29.76 38.92Z" fill="#777777"/>',
			'code'        => '<path d="M34 36 31.9 33.9 41.7 24 31.9 14.1 34 12 46 24ZM14 36 2 24 14 12 16.1 14.1 6.3 24 16.1 33.9ZM16 25.75Q15.3 25.75 14.775 25.225Q14.25 24.7 14.25 24Q14.25 23.3 14.775 22.775Q15.3 22.25 16 22.25Q16.7 22.25 17.225 22.775Q17.75 23.3 17.75 24Q17.75 24.7 17.225 25.225Q16.7 25.75 16 25.75ZM24 25.75Q23.3 25.75 22.775 25.225Q22.25 24.7 22.25 24Q22.25 23.3 22.775 22.775Q23.3 22.25 24 22.25Q24.7 22.25 25.225 22.775Q25.75 23.3 25.75 24Q25.75 24.7 25.225 25.225Q24.7 25.75 24 25.75ZM32 25.75Q31.3 25.75 30.775 25.225Q30.25 24.7 30.25 24Q30.25 23.3 30.775 22.775Q31.3 22.25 32 22.25Q32.7 22.25 33.225 22.775Q33.75 23.3 33.75 24Q33.75 24.7 33.225 25.225Q32.7 25.75 32 25.75Z"/>',
			'filter'      => '<path d="M28 26V38Q28 38.85 27.425 39.425Q26.85 40 26 40H22Q21.15 40 20.575 39.425Q20 38.85 20 38V26L8.05 10.75Q7.35 9.9 7.85 8.95Q8.35 8 9.4 8H38.6Q39.65 8 40.15 8.95Q40.65 9.9 39.95 10.75ZM24 26.2 36 11H12ZM24 26.2Z"/>',
			'split'       => '<path d="M22.5 44V34Q22.5 31.6 21.7 30.05Q20.9 28.5 19.25 26.85L21.4 24.7Q22.05 25.25 22.775 26.2Q23.5 27.15 24 27.95Q24.85 26.65 25.675 25.7Q26.5 24.75 27.25 24.1Q30.15 21.75 31.425 18.425Q32.7 15.1 32.4 9.7L27.9 14.2L25.8 12.1L33.9 4L42 12.1L39.9 14.2L35.4 9.7Q35.65 16 34.175 19.625Q32.7 23.25 29.25 26.4Q27.05 28.4 26.275 30.05Q25.5 31.7 25.5 34V44ZM12.9 16.2Q12.7 15.3 12.575 13.575Q12.45 11.85 12.55 9.75L8.1 14.2L6 12.1L14.1 4L22.2 12.1L20.1 14.2L15.6 9.7Q15.5 11.6 15.55 13.025Q15.6 14.45 15.8 15.5ZM17.1 24.75Q16.25 23.85 15.225 22.375Q14.2 20.9 13.65 19.15L16.6 18.4Q17.05 19.65 17.8 20.8Q18.55 21.95 19.2 22.65Z"/>',
			'terminal'    => '<path d="M7 40Q5.8 40 4.9 39.1Q4 38.2 4 37V11Q4 9.8 4.9 8.9Q5.8 8 7 8H41Q42.2 8 43.1 8.9Q44 9.8 44 11V37Q44 38.2 43.1 39.1Q42.2 40 41 40ZM7 37H41Q41 37 41 37Q41 37 41 37V15.2H7V37Q7 37 7 37Q7 37 7 37ZM24.5 33.6V30.6H35.5V33.6ZM15 33.4 12.9 31.3 18.05 26.1 12.85 20.9 15 18.8 22.3 26.1Z"/>',
			'error_badge' => '<path d="M22.5 24.6H25.5V14.25H22.5ZM24 31.3Q24.7 31.3 25.2 30.8Q25.7 30.3 25.7 29.6Q25.7 28.9 25.2 28.4Q24.7 27.9 24 27.9Q23.3 27.9 22.8 28.4Q22.3 28.9 22.3 29.6Q22.3 30.3 22.8 30.8Q23.3 31.3 24 31.3ZM24 43.95Q17 42.2 12.5 35.825Q8 29.45 8 21.85V9.95L24 3.95L40 9.95V21.85Q40 29.45 35.5 35.825Q31 42.2 24 43.95ZM24 24.55Q24 24.55 24 24.55Q24 24.55 24 24.55Q24 24.55 24 24.55Q24 24.55 24 24.55ZM24 40.85Q29.75 38.95 33.375 33.675Q37 28.4 37 21.85V12.05L24 7.15L11 12.05V21.85Q11 28.4 14.625 33.675Q18.25 38.95 24 40.85Z"/>',
			'php'         => '<path d="M19.2 31.25 21.35 29.1 16.3 24 21.35 18.95 19.2 16.8 12 24ZM28.8 31.25 36.05 24 28.85 16.8 26.7 18.95 31.75 24 26.65 29.1ZM9 39H39Q39 39 39 39Q39 39 39 39V9Q39 9 39 9Q39 9 39 9H9Q9 9 9 9Q9 9 9 9V39Q9 39 9 39Q9 39 9 39ZM9 9Q9 9 9 9Q9 9 9 9V39Q9 39 9 39Q9 39 9 39Q9 39 9 39Q9 39 9 39V9Q9 9 9 9Q9 9 9 9ZM9 42Q7.75 42 6.875 41.125Q6 40.25 6 39V9Q6 7.75 6.875 6.875Q7.75 6 9 6H19.25Q19.5 4.25 20.85 3.125Q22.2 2 24 2Q25.8 2 27.15 3.125Q28.5 4.25 28.75 6H39Q40.25 6 41.125 6.875Q42 7.75 42 9V39Q42 40.25 41.125 41.125Q40.25 42 39 42ZM24 8.15Q24.7 8.15 25.225 7.625Q25.75 7.1 25.75 6.4Q25.75 5.7 25.225 5.175Q24.7 4.65 24 4.65Q23.3 4.65 22.775 5.175Q22.25 5.7 22.25 6.4Q22.25 7.1 22.775 7.625Q23.3 8.15 24 8.15Z"/>',
		)
	);
}
