( function( api ) {

	// Extends our custom "digital-marketer" section.
	api.sectionConstructor['digital-marketer'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );