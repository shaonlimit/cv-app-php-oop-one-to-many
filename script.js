document
  .getElementById('academic_add_btn')
  .addEventListener('click', function () {
    newRow = document.createElement('tr');
    newRow.innerHTML += `<td><input name="exam_name[]" type="text" class="form-control" placeholder="Exam name"></td>
    <td><input name="institute_name[]" type="text" class="form-control" placeholder="Institute name">
    </td>
    <td><input name="exam_year[]" type="text" class="form-control" placeholder="Exam year"></td>
    <td><input name="result[]" type="number" min="0" max="100" step="any" class="form-control" placeholder="Result"></td>
    <td> <button class='btn btn-danger btn-sm' onClick='deleteRow(this)'>Delete</button> </td>`;
    document.getElementById('academic_tbody').appendChild(newRow);
  });
function deleteRow(btn) {
  btn.parentNode.parentNode.parentNode.removeChild(btn.parentNode.parentNode);
}

document.getElementById('skill_add_btn').addEventListener('click', function () {
  newRow = document.createElement('tr');
  newRow.innerHTML += `<td><input name="skill_name[]" type="text" class="form-control" placeholder="Skills name"></td>
    <td><input name="pro_level[]" type="text" class="form-control" placeholder="Proficiency Level"></td>
    <td> <button class='btn btn-danger btn-sm ' onClick='deleteRow(this)'>Delete</button> </td>`;
  document.getElementById('skill_tbody').appendChild(newRow);
});
