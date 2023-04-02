<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap4.min.css">
    <title>Tabel Pegawai</title>

</head>

<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>Data Pegawai menggunakan AJAX Datatables</h3>
            </div>
            <div class="card-body">
                <table id="t_pegawai" class="table table-striped table-bordered table-sm" width="100%">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Jenis Kelamin</th>
                            <th>Email</th>
                            <th>Alamat</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>

    <script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" language="javascript"
        src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" language="javascript"
        src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap4.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#t_pegawai').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: "{{ route('pegawai.index') }}",
                    type: 'GET'
                },
                columns: [{
                        data: 'nama_pegawai',
                        name: 'nama_pegawai'
                    },
                    {
                        data: 'jenis_kelamin',
                        name: 'jenis_kelamin'
                    },
                    {
                        data: 'email',
                        name: 'email'
                    },
                    {
                        data: 'alamat',
                        name: 'alamat'
                    }
                ],
                order: [
                    [0, 'asc']
                ]
            });
        });
    </script>
</body>

</html>
