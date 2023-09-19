<style>
    body
    {
        width: 3000px;
        height: 3000px;
    }
    table {
    border-collapse: separate;
    border-spacing: 0;
    border-top: 1px solid grey;
    width: 300px;
    height: 100px;
    }

    td, th {
    margin: 0;
    border: 1px solid grey;
    white-space: nowrap;
    border-top-width: 0px;
    }


    div {
    width: 200px;
    overflow-x: scroll;
    margin-left: 5em;
    overflow-y: visible;
    padding: 0;
    }

    .headcol {
    position: absolute;
    width: 5em;
    left: 0;
    top: auto;
    border-top-width: 1px;
    margin-top: -1px;
    }

    .headcol:before {
    content: 'Row ';
    }

    .long {
    background: yellow;
    }
</style>
<div>
  <table>
    <tr>
      <th class="headcol">h1</th>
      <td class="long">h2</td>
      <td class="long">h3</td>
    </tr>
    <tr>
      <th class="headcol">D1</th>
      <td class="long">D2</td>
      <td class="long">D3</td>
    </tr>
    <tr>
      <th class="headcol">D1</th>
      <td class="long">D2</td>
      <td class="long">D3</td>
    </tr>
  </table>
</div>
