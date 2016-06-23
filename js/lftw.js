jQuery( document ).ready( function() {
	iframe();

	jQuery( '#lftw_form_userbg input[name="lftw_role"]' ).on( 'change', function() {
		if ( jQuery( 'input[name="lftw_role"]:checked', '#lftw_form_userbg' ).attr( 'id' ) === 'lftw_role_1' ) {
			jQuery( '#lftw_role_since').prop('required', 'required');
			jQuery( '#lftw_role_other' ).removeAttr( 'required' ).val( '' );
			jQuery( '#lftw_role_4' ).val( '' );
		} else if ( jQuery( 'input[name="lftw_role"]:checked', '#lftw_form_userbg' ).attr( 'id' ) === 'lftw_role_4' ) {
			jQuery( '#lftw_role_since' ).removeAttr( 'required' ).val( '' );
			jQuery( '#lftw_role_other' ).prop( 'required', 'required' );
			jQuery( '#lftw_role_1' ).val( '' );
		} else {
			jQuery( '#lftw_role_since' ).removeAttr( 'required' ).val( '' );
			jQuery( '#lftw_role_other' ).removeAttr( 'required' ).val( '' );
			jQuery( '#lftw_role_1' ).val( '' );
			jQuery( '#lftw_role_4' ).val( '' );
		}
	});

	jQuery( '#lftw_role_since' ).on( 'input', function() {
		jQuery( '#lftw_role_1' ).prop( 'checked', true ).val( jQuery( this ).val() );
		jQuery( '#lftw_role_since').prop('required', 'required');
		jQuery( '#lftw_role_other' ).removeAttr( 'required' ).val( '' );
		jQuery( '#lftw_role_4' ).val( '' );
	});

	jQuery( '#lftw_role_other' ).on( 'input', function() {
		jQuery( '#lftw_role_4' ).prop( 'checked', true ).val( jQuery( this ).val() );
		jQuery( '#lftw_role_since' ).removeAttr( 'required' ).val( '' );
		jQuery( '#lftw_role_other' ).prop( 'required', 'required' );
		jQuery( '#lftw_role_1' ).val( '' );
	});

	jQuery( '#lftw_form_userbg input[name="lftw_education1"]' ).on( 'change', function() {
		if ( jQuery( 'input[name="lftw_education1"]:checked', '#lftw_form_userbg' ).attr( 'id' ) === 'lftw_education1_4' ) {
			jQuery( '#lftw_education1_other' ).prop('required', 'required');
		} else {
			jQuery( '#lftw_education1_other' ).removeAttr( 'required' ).val( '' );
			jQuery( '#lftw_education1_4' ).val( '' );
		}
	});

	jQuery( '#lftw_education1_other' ).on( 'input', function() {
		jQuery( '#lftw_education1_4' ).prop( 'checked', true ).val( jQuery( this ).val() );
		jQuery( '#lftw_education1_other' ).prop( 'required', 'required' );
	});

	jQuery( '#lftw_form_userbg input[name="lftw_organic"]' ).on( 'change', function() {
		if ( jQuery( 'input[name="lftw_organic"]:checked', '#lftw_form_userbg' ).attr( 'id' ) === 'lftw_organic_yes' ) {
			jQuery( '#lftw_organic_since' ).prop('required', 'required' );
		} else {
			jQuery( '#lftw_organic_since' ).removeAttr( 'required' ).val( '' );
			jQuery( '#lftw_organic_yes' ).val( '' );
		}
	});

	jQuery( '#lftw_organic_since' ).on( 'input', function() {
		jQuery( '#lftw_organic_yes' ).prop( 'checked', true ).val( jQuery( this ).val() );
		jQuery( '#lftw_organic_since' ).prop( 'required', 'required' );
	});

	jQuery( '#lftw_form_userbg input[name="lftw_tiknownfrom[]"]' ).on( 'change', function() {
		if ( jQuery( 'input[id="lftw_tiknownfrom_4"]:checked', '#lftw_form_userbg' ).length > 0 ) {
			jQuery( '#lftw_tiknownfrom_other' ).prop('required', 'required' );
		} else {
			jQuery( '#lftw_tiknownfrom_other' ).removeAttr( 'required' ).val( '' );
			jQuery( '#lftw_tiknownfrom_4' ).val( '' );
		}
	});

	jQuery( '#lftw_tiknownfrom_other' ).on( 'input', function() {
		jQuery( '#lftw_tiknownfrom_4' ).prop( 'checked', true ).val( jQuery( this ).val() );
		jQuery( '#lftw_tiknownfrom_other' ).prop( 'required', 'required' );
	});

	jQuery( '#lftw_form_userbg input[name="lftw_type"]' ).on( 'change', function() {
		if ( jQuery( 'input[name="lftw_type"]:checked', '#lftw_form_userbg' ).val() === 'keine Rinderhaltung') {
			jQuery( '#lftw_form_userbg_8-1' ).slideUp();
			jQuery( '#lftw_form_userbg_8-1 input' ).each( function() {
				jQuery( this ).removeAttr( 'required' ).val( 0 );
			});
		} else {
			jQuery( '#lftw_form_userbg_8-1' ).slideDown();
			jQuery( '#lftw_form_userbg_8-1 input' ).each( function() {
				jQuery( this ).prop('required', 'required');
			});
		}
	});

	jQuery( '#lftw_form_userbg input[name="lftw_tiknown"]' ).on( 'change', function() {
		if ( jQuery( 'input[name="lftw_tiknown"]:checked', '#lftw_form_userbg' ).val() === 'Nein' ) {
			jQuery( '#lftw_form_userbg_9-1-2' ).slideUp();
			jQuery( '#lftw_form_userbg_9-1-2 input[type="checkbox"]' ).each( function() {
				jQuery( this ).prop( "checked", false );
			});
			jQuery( '#lftw_tiknownfrom_other' ).removeAttr( 'required' ).val( '' );
			jQuery( '#lftw_form_userbg_9-1-2 textarea' ).val( '' );
		} else {
			jQuery( '#lftw_form_userbg_9-1-2' ).slideDown();
		}
	});
});

jQuery( window ).resize( function() {
	iframe();
});

function iframe() {
	var left = document.getElementsByClassName( 'lftw_left' );
	if ( left.length > 0 ) {
		var contentWidth = document.getElementsByClassName( 'lftw_left' )[0].getBoundingClientRect().width;
		var iframe = jQuery( '.lftw_iframe' );

		iframe.css( 'width', contentWidth ).css( 'height', contentWidth * 315 / 560 );
	}
}