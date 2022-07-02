function hapus(id){
    Swal.fire({
    title: 'Do you want to delete this data?',
    showDenyButton: true,
    showCancelButton: true,
    confirmButtonText: 'Yes',
    denyButtonText: `No`,
    }).then((result) => {
    /* Read more about isConfirmed, isDenied below */
    if (result.isConfirmed) {
        axios({
            method: 'get',
            url: '/pegawai/delete/'+id,
            
        }).then(response=>{
            if(response.status==200){
                
                Swal.fire('Deleted', '', 'success')
                location.reload('/pegawai')
            }
        })        
        
    } else if (result.isDenied) {
        Swal.fire('Changes are not saved', '', 'info')
    }
    })


}  

function simpan(){
    // axios({
    //     method: 'post',
    //     url: '/pegawai/input',
    //     data: {
    //       firstName: 'Fred',
    //       lastName: 'Flintstone'
    //     }
    // });
    // alert('berhasil')
    console.log('masuk sini');
}