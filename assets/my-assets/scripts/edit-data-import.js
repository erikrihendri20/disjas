function onlyUnique(value, index, self) {
    return self.indexOf(value) === index;
}
function loadTahun() {
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
        $('#tahun-select-edit').html(option)
    })
}

function loadBulan() {
    $.get('getDataImport' , (data) => {
        result = data.filter( d => d.tahun == $('#tahun-select-edit').val())
        bulan = []
        result.forEach(r => {
            bulan.push(parseInt(r.bulan))
        })
        bulan = bulan.sort(function(a, b){return a-b})
        option = ''
        bulan.forEach( b => {
            option+=`<option value="${b}">${b}</option>`
        })
        $('#bulan-select-edit').html(option)
    })
}

function loadNilaiImport() {
    $.get('getDataImport' , (data) => {
        nilaiImport = data.find( d => (d.tahun==$('#tahun-select-edit').val() && d.bulan==$('#bulan-select-edit').val()))
        $('#nilai-select-edit').val(nilaiImport.nilai)
    })
}

$(document).ready( () => {
    loadTahun()
    loadBulan()
    loadNilaiImport()
    $('#tahun-select-edit').change( () => {
        loadBulan()
        loadNilaiImport()
    })
    $('#bulan-select-edit').change( () => {
        loadNilaiImport()
    })

})