<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <button id="btn">Tambah</button>
    <script src="template/jquery-3.6.0.min.js"></script>
    <script src="template/sweetalert2.all.min.js"></script>
    <script>
        // $('#btn').on('click', function() {
        //     Swal.fire(
        //         'Good job!',
        //         'You clicked the button!',
        //         'success'
        //     )
        // })
        $('#btn').on('click', function() {

            // Swal.fire({
            //     title: 'Are you sure?',
            //     text: "You won't be able to revert this!",
            //     icon: 'warning',
            //     showCancelButton: true,
            //     confirmButtonColor: '#3085d6',
            //     cancelButtonColor: '#d33',
            //     confirmButtonText: 'Yes, delete it!'
            // }).then((result) => {
            //     if (result.isConfirmed) {
            //         Swal.fire(
            //             'Deleted!',
            //             'Your file has been deleted.',
            //             'success'
            //         )
            //     }
            // })
            //     const swalWithBootstrapButtons = Swal.mixin({
            //         customClass: {
            //             confirmButton: 'btn btn-success',
            //             cancelButton: 'btn btn-danger'
            //         },
            //         buttonsStyling: false
            //     })

            //     swalWithBootstrapButtons.fire({
            //         title: 'Are you sure?',
            //         text: "You won't be able to revert this!",
            //         icon: 'warning',
            //         showCancelButton: true,
            //         confirmButtonText: 'Yes, delete it!',
            //         cancelButtonText: 'No, cancel!',
            //         reverseButtons: true
            //     }).then((result) => {
            //         if (result.isConfirmed) {
            //             swalWithBootstrapButtons.fire(
            //                 'Deleted!',
            //                 'Your file has been deleted.',
            //                 'success'
            //             )
            //         } else if (
            //             /* Read more about handling dismissals below */
            //             result.dismiss === Swal.DismissReason.cancel
            //         ) {
            //             swalWithBootstrapButtons.fire(
            //                 'Cancelled',
            //                 'Your imaginary file is safe :)',
            //                 'error'
            //             )
            //         }
            //     })
            Swal.fire({
                position: 'top-end',
                icon: 'success',
                title: 'Your work has been saved',
                showConfirmButton: false,
                timer: 1500
            })
        })
    </script>


</body>

</html>