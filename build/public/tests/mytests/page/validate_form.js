registerTest ('Form fails if required fields are empty?', {
    load : function () {
    	this.
        test("Form is valid?", function($) {
            ok( true, "Submitting the form!");

            // After this, we'll have to wait for the action page of the
            // form to load
            $('form').submit();
        })

        .wait(function($) {

        	// This will be called repeatedly until it returns true, killing the wait
            // (hopefully long before the 10 seconds is up)
            return workspace.document.querySelector('.error') != null;

        }, 10000) // wait max 10 seconds ( Pause execution of tests per duration )

        this.test("Testing required fields?",function($) {
        	ok( workspace.document.querySelector('.error').innerHTML.indexOf("firstName") != -1, "The firstName field is required." );
        	ok( workspace.document.querySelector('.error').innerHTML.indexOf("lastName") != -1, "The lastName field is required." );
        	ok( workspace.document.querySelector('.error').innerHTML.indexOf("email") != -1, "The email field is required." );
        	ok( workspace.document.querySelector('.error').innerHTML.indexOf("phone") != -1, "The phone field is required." );
        	ok( workspace.document.querySelector('.error').innerHTML.indexOf("address") != -1, "The address field is required." );
        	ok( workspace.document.querySelector('.error').innerHTML.indexOf("suburb") != -1, "The suburb field is required." );
        	ok( workspace.document.querySelector('.error').innerHTML.indexOf("postcode") != -1, "The postcode field is required." );
        })
		.loadPage("/")
        .test("Form is valid?", function($) {
            ok( true, "Submitting the form!");

            // After this, we'll have to wait for the action page of the
            // form to load
            $('#firstName').val('Dean');
            $('#lastName').val('Tedesco');
            $('#email').val('dino@tedesco.net.au');
            $('#phone').val('0409 331 111');
            $('#address').val('7 Buckingham Ave');
            $('#suburb').val('Normanhurst');
            $('#state').val('NSW');
            $('#postcode').val('2076');
            $('#enquiryType').val('Product complaint');
            $('form').submit();
        })

        .wait(function() {
        	// This will be called repeatedly until it returns true, killing the wait
            // (hopefully long before the 10 seconds is up)
            return workspace.document.querySelector('.error') != null;

        }, 10000) // wait max 10 seconds ( Pause execution of tests per duration )

        this.test("Testing required fields?",function($) {
        	ok( workspace.document.querySelector('.error').innerHTML.indexOf("productName") != -1, "The productName field is required." );
        	ok( workspace.document.querySelector('.error').innerHTML.indexOf("productSize") != -1, "The productSize field is required." );
        	ok( workspace.document.querySelector('.error').innerHTML.indexOf("useByDate") != -1, "The useByDate field is required." );
        	ok( workspace.document.querySelector('.error').innerHTML.indexOf("batchCode") != -1, "The batchCode field is required." );
        });
    }
});