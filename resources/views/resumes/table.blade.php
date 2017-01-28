<table class="table data">
<thead>
    <tr>
    <th class="list-checkbox">
            <div class="checkbox custom-checkbox nolabel">
                <input type="checkbox" id="Lists-checkboxAll">
                <label for="Lists-checkboxAll"></label>
            </div>
        </th>
        <th>Student email</th>
        <th>Title</th>
        <th>Actions</th>
    </tr>
</thead>

<tbody>
    @each ('resumes.item', $resumes, 'resume', 'Nothing to show')
</tbody>
</table>