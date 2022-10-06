
$(function () {
    populateTable();
});

function populateTable() {
    $.get(`${serverUrl}list`, function (data, status) {

        jsonData = JSON.parse(data);
        console.log(jsonData);
        let html = '';
        for (var i = 0; i < jsonData.length; i++) {
            console.log(jsonData[i]);
            html += `<tr><th>${i + 1}</th><td>${jsonData[i].description}</td><td>${jsonData[i].price}</td></tr>`;
        }
        $("#list-body").html(html);
    });
}