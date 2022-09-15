<script>
    window.addEventListener('OpenAddCountryModal', function(){
        $('.addCountry').find('span').html('');
        $('.addCountry').find('form')[0].reset();
        $('.addCountry').modal('show');
    });
    window.addEventListener('CloseAddCountryModal', function(){
        $('.addCountry').find('span').html('');
        $('.addCountry').find('form')[0].reset();
        $('.addCountry').modal('hide');
        alert('New Country Has been Saved Successfully');
    });
    window.addEventListener('OpenEditCountryModal', function(event){
        $('.editCountry').find('span').html('');
        $('.editCountry').modal('show');
    });
    window.addEventListener('CloseEditCountryModal', function(event){
        $('.editCountry').find('span').html('');
        $('.editCountry').find('form')[0].reset();
        $('.editCountry').modal('hide');
    });
    window.addEventListener('SwalConfirm', function(event){
        swal.fire({
            title:event.detail.title,
            imageWidth:48,
            imageHeight:48,
            html:event.detail.html,
            showCloseButton:true,
            showCancelButton:true,
            cancelButtonText:'Cancel',
            confirmButtonText:'Yes, Delete',
            cancelButtonColor:'#d33',
            confirmButtonColor:'#3085d6',
            width:300,
            allowOutsideClick:false
        }).then(function(result){
            if(result.value){
                window.livewire.emit('delete',event.detail.id);
            }
        })
    })
    window.addEventListener('deleted', function(event){
        alert('Country record has been deleted');
    });
    window.addEventListener('swal:deleteCountries', function(event){
        swal.fire({
            title:event.detail.title,
            html:event.detail.html,
            showCloseButton:true,
            showCancelButton:true,
            cancelButtonText:'No',
            confirmButtonText:'Yes',
            cancelButtonColor:'#d33',
            confirmButtonColor:'#3085d6',
            width:300,
            allowOutsideClick:false
        }).then(function(result){
            if(result.value){
                window.livewire.emit('deleteCheckedCountries',event.detail.checkedIDs);
            }
        });
    });
</script>