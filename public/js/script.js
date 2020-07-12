$(document).ready(function () {
    $('#addUser').click(function (event) {
        var nom = document.getElementById('nom').value;
        var prenom = document.getElementById('prenom').value;
        var adresse = document.getElementById('adresse').value;
        var telephone = document.getElementById('telephone').value;
        var email = document.getElementById('email').value;
        var login = document.getElementById('login').value;
        var password = document.getElementById('password').value;
        var salaire = document.getElementById('salaire').value;
        var profil = document.getElementById('profil').value;
        var agence = document.getElementById('agence').value;
        $.ajax({
            url:'http://localhost/mesprojets/BanqueDuPeupleSamane/Ajax/addUser',
            type: 'POST',
            data: {nomU: nom, prenomU: prenom, adresseU: adresse, telephoneU: telephone, emailU: email, loginU:login, passwordU: password, salaireU: salaire,profilU:profil, agenceU: agence },
            success: function (data) {
               alert(data);
            }
        })

    })

    $('#operation').click(function (event) {

        var numero = document.getElementById('numero').value;
        var montant = document.getElementById('montant').value;
        var type = document.getElementById('typeTrans').value;
        if (type==1){
            var confirmation = confirm("Voulez-vous effectuer cette operation");
            if(confirmation){
                $.ajax({
                    url:'http://localhost/mesprojets/BanqueDuPeupleSamane/Compte/transactionDepotAjax',
                    type: 'POST',
                    data: {numero: numero, montant: montant},
                    success: function (data) {
                        if (data > 0){
                            alert("Depot Fait avec succés");
                        }

                    }
                })
            }
        } else if (type==2){

            var confirmation = confirm("Voulez-vous effectuer cette operation");
            if(confirmation){
                $.ajax({
                    url:'http://localhost/mesprojets/BanqueDuPeupleSamane/Compte/transactionRetraitAjax',
                    type: 'POST',
                    data: {numero: numero, montant: montant},
                    success: function (data) {
                       if (data > 0){
                           alert("Retrait Fait avec succés");
                       }
                    }

                })
            }
        } else{
            alert("Veuillez Choisir le type de transfert");
        }
    })



});