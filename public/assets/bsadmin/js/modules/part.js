/**
 * Select 2 form & validate
 */
$(document).ready(function() {
    new DataTable('#part-table', {
        info: true,
        ordering: true,
        paging: true,
        language: {
            info: 'Đang ở Trang _PAGE_ trên _PAGES_ trang',
            infoEmpty: 'Không có dữ liệu',
            infoFiltered: '(filtered from _MAX_ total records)',
            lengthMenu: 'Hiển thị _MENU_ kết quả',
            zeroRecords: 'Nothing found - sorry'
        }
    });
});