
function onlyUnique(value, index, self) {
    return self.indexOf(value) === index;
}
$.get('getDataImport' , (data) => {
    tahun = []
    data.forEach(d => {
        tahun.push(d.tahun)
    });
    unique = (tahun.filter(onlyUnique)).sort(function(a, b){return a-b})
    option = ''
    unique.forEach( u => {
        option+=`<option value="${u}">${u}</option>`
    })
    $('#tahun-filter-tabel').append(option)
})
function loadData() {
    $.get('getDataImport/' + $('#tahun-filter-tabel').val() , (data) => {
        tahun = []
        data.forEach(d => {
            tahun.push(d.tahun)
        });
        th = ``
        th+= `
        <th>No</th>
        <th>Tahun</th>
        <th>Bulan</th>
        <th>Nilai Import</th>
        <th>Action</th>
        `
        thead = `<thead>
        <tr>${th}</tr>
        </thead>`

        cell = ``
        no = 1
        data.forEach(d => {
            cell+=`
                <tr>
                    <td>
                        ${no++}
                    </td>
                    <td>
                        ${d.tahun}
                    </td>
                    <td>
                        ${d.bulan}
                    </td>
                    <td>
                        ${d.nilai}
                    </td>
                    <td>
                        <a href="editDataImport/${d.id}" type="button" class="badge badge-success" style="border:none">Edit</a>
                        <a href="hapusDataImport/${d.id}" type="button" class="badge badge-danger" style="border:none">Hapus</a>
                    </td>
                </tr>
            `
        });
        tbody = `<tbody>${cell}</tbody>`
        table = `<table id="table" class="table table-bordered table-striped">
        ${thead}
        ${tbody}
        </table>`

        $('#table-import').html(table)
        $("#table").DataTable({
            "responsive": true, "lengthChange": false, "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#table_wrapper .col-md-6:eq(0)');
    })
}

$(document).ready( () => {
    loadData()
    $('#tahun-filter-tabel').change( () => {
        loadData()
    })
})