$(() => {
 
    $.ajaxSetup({
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}
    })
 
    $('.form-delete').submit((e) => {
        e.preventDefault();
        let href = $(e.currentTarget).attr('action')
        if (confirm('Vraiment supprimer ?')){
            $.ajax({
                url: href,
                type: 'DELETE'
            })
            .done((data) => {
                document.getElementById("image-" + data.id).remove()
            })
            .fail(() => {
                alert("La photo n'a pu être supprimée")
            })
        }
 
    })

    $('.btnAlert').submit((e) => {
        e.preventDefault();
        let href = $(e.currentTarget).attr('action')
        if (confirm("Voulez-vous signaler cet image?")){
            $.ajax({
                url: href,
                type: 'GET'
            })
            .done((data) => {
              $('div.alert').html(data);
            })
            .fail(() => {
                alert("Le signalement n'a pas fonctionné")
            })
        }
    })
})

