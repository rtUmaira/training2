/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


({
    extendsFrom: 'RecordView',

    initialize: function (options) {
        this._super("initialize", [options]);
//        var userID;
        var that = this;
        var data = new Object();
        that.model.fetch({
            success: function(data1) {
                var employee = app.data.createBean('Employees', data1.attributes.assigned_user_id);
                employee.fetch({
                    success: function(data2) 
                    {
                        var name =  data2.attributes.records[0].full_name;
                        var email =  data2.attributes.records[0].email[0].email_address;
                        var title = data2.attributes.records[0].title;
                        var data4 = new Object();
                        
                        data4.name = name;
                        data4.title = title;
                        data4.email = email;
                        that.data = data4;
                        // console.log(that.data);                      

                        that.render();
                    }                    
                 });
            }
        });
    }

})