     /*******************************************************************/
    /**********************CONECT DATA TO THE PHP API********************/
    /*******************************************************************/
     
     var app = new Vue({
            el: '#app',
            data: {
                usuarios: [],
                name: '',
                telefone: ''
            },
            methods: {
                obtenerUsuarios: function() {
                    axios.post('api/model.php', {
                        request: 1
                    })
                    .then(function(response) {
                        app.usuarios = response.data;
                    })
                    .catch(function(error) {
                        console.log(error);
                    });
                }, 


               //ADD A NEW USER TO YOUR DATABASE
                addUsuario: function() {
                    if(this.name != '' && this.telefone != '') {
                        axios.post('api/model.php', {
                            request: 2,
                            name: this.name,
                            telefone: this.telefone
                        })
                        .then(function(response) {
                            app.obtenerUsuarios();

                            app.name = '';
                            app.telefone = '';

                            alert(response.data);
                        })
                        .catch(function () {
                            console.log(error);
                        });
                    } else {
                        alert("Llenar los campos.");
                    }
                },

                //EDIT THE USER YOU JUST REGISTERED
                editUsuario: function(index, id) {
                    var name = this.name;
                    var telefone = this.telefone;

                    if(name != '' && telefone != '') {
                        axios.post('api/model.php', {
                            request: 3,
                            id: id,
                            name: name,
                            telefone: telefone
                        })
                        .then(function(response) {
                            app.obtenerUsuarios();
                            app.name = '';
                            app.telefone = '';
                            alert(response.data);
                        })
                        .catch(function(error) {
                            console.log(error);
                        });
                    }
                },

                 //DELETE THE USER YOU JUST REGISTERED
                deleteUsuario: function(index, id) {
                    axios.post('api/model.php', {
                        request: 4,
                        id: id
                    })
                    .then(function(response) {
                        app.usuarios.splice(index, 1);
                        alert(response.data);
                    })
                    .catch( function(error) {
                        console.log(error);
                    });
                }
            },

            created: function() {
                this.obtenerUsuarios();
            }
        })