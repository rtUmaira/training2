/**
 * Created by umaira.sajjad on 8/10/16.
 */


({
    extendsFrom: 'RowactionField',
    
    intialize: function (options) {
        app.view.invokeParent(this, {type: 'field', name: 'rowaction', method: 'intialize', args:[options]})
        this.type = 'rowaction';
    }, 
    rowActionSelect: function() {
      this.confirm_zip();  
    },
    confirm_zip: function () {
        var currentCity = this.model.get('billing_address_city');
        var currentZip = this.model.get('billing_address_postalcode');

        $.ajax({
            url: 'http//api.zippopotam.us/us/' + currentZip,
            success : function (data) {
                this.zipJSON = data;
                var city = this.zipJSON.places[0]['place name'];

                if (city === currentCity)
                {
                    app.alert.show('address-ok', {
                        level: 'success',
                        messages: 'City and Zip match',
                        autoClose: true
                    });
                }

            }
        });
    },
    
})