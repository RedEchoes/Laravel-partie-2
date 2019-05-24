$(() => {

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    })

    $('.image-delete').submit((e) => {
        e.preventDefault();
        let href = $(e.currentTarget).attr('action')
        if (confirm('Vraiment supprimer ?')) {
            $.ajax({
                    url: href,
                    type: 'DELETE'
                })
                .done((data) => {
                    document.getElementById("image-" + data.id).remove()
                    alert("La suppression a été effectuée avec succès")
                })
                .fail(() => {
                    alert("La photo n'a pu être supprimée")
                })
        }

    })

    $('.delete-all-images').submit((e) => {
        e.preventDefault();
        let href = $(e.currentTarget).attr('action')
        if (confirm('Vraiment supprimer toutes les images signalées?')) {
            $.ajax({
                    url: href,
                    type: 'DELETE'
                })
                .done(() => {
                    document.getElementById("py-4").remove()
                    alert("La suppression a été effectuée avec succès")
                })
                .fail(() => {
                    alert("Les images n'ont pu être supprimée")
                })
        }

    })

    $('.delete-user').submit((e) => {
        e.preventDefault();
        let href = $(e.currentTarget).attr('action')
        if (confirm('Vraiment supprimer ?')) {
            $.ajax({
                    url: href,
                    type: 'DELETE'
                })
                .done((data) => {
                    console.log(data);
                    document.getElementById("user-" + data.id).remove()
                    alert("La suppression a été effectuée avec succès")
                })
                .fail(() => {
                    alert("L'utilisateur n'a pu être supprimée")

                })
        }

    })
    $('.profile-delete').submit((e) => {
        e.preventDefault();
        let href = $(e.currentTarget).attr('action')
        if (confirm('Vraiment supprimer ?')) {
            $.ajax({
                    url: href,
                    type: 'DELETE'
                })
                .done((data) => {
                    console.log(data);
                    document.getElementById("user-" + data.id).remove()
                    alert("La suppression de l'utilisateur a été effectuée avec succès")
                    window.location.href = "/login";
                })
                .fail(() => {
                    alert("L'utilisateur n'a pu être supprimée")

                })
        }

    })

    $('.btnAlert').submit((e) => {
        e.preventDefault();
        let href = $(e.currentTarget).attr('action')
        if (confirm("Voulez-vous signaler cet image?")) {
            $.ajax({
                    url: href,
                    type: 'GET'
                })
                .done((data) => {
                    $('div.alert').html(data)
                    alert("Le signalement a été affectué avec succès")
                })
                .fail(() => {
                    alert("Le signalement n'a pas fonctionné")
                })
        }
    })
    $("#result").html('<div class="alert alert-success"><button type="button" class="close">×</button>'+info+'</div>');

    //timing the alert box to close after 5 seconds
    window.setTimeout(function () {
        $(".alert").fadeTo(500, 0).slideUp(500, function () {
            $(this).remove();
        });
    }, 5000);
   
    //Adding a click event to the 'x' button to close immediately
    $('.alert .close').on("click", function (e) {
        $(this).parent().fadeTo(500, 0).slideUp(500);
    });

})
