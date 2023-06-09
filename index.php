<?php

require_once 'dompdf/autoload.inc.php';

use Dompdf\Dompdf;

$document = new Dompdf();

$html = '
<style>
    * {
        text-align: center;
    }

    table,
    th,
    td {
        border: 1px solid #c7c3c3;
        border-collapse: collapse;
    }

    .rotate {
        // -ms-writing-mode: tb-rl;
        // -webkit-writing-mode: vertical-rl;
        // writing-mode: vertical-rl;
        // transform: rotate(180deg);
        // white-space: nowrap;

        text-align: center;
        white-space: nowrap;
        vertical-align: middle;
        width: 1.5em;
    }
</style>

    <table>
        <tr>
            <th rowspan="2">Package <br> number</th>
            <th rowspan="2">Total width <br> (mm)</th>
            <th rowspan="2">Total height <br>(mm)</th>
            <th rowspan="2">Quantity (pcs)</th>
            <th rowspan="2">Pleat <br> system</th>
            <th rowspan="2">Fabric symbol</th>
            <th colspan="11">Colour of accessories</th>
            <th rowspan="2">Type of <br> bracket(1)</th>
            <th rowspan="2">Window profile height <br> (Z) for type D bracket</th>
            <th rowspan="2">Operating handle</th>
            <th colspan="2">Number of <br> operating <br> handles (2)</th>
            <th rowspan="2">Comments</th>
        </tr>
        <tr>
            <td class="rotate">white</td>
            <td class="rotate">cream white</td>
            <td class="rotate">beige</td>
            <td class="rotate">brown</td>
            <td class="rotate">basalt grey</td>
            <td class="rotate">anthracite</td>
            <td class="rotate">black</td>
            <td class="rotate">anoda silver</td>
            <td class="rotate">champagne anode </td>
            <td class="rotate">golden oak</td>
            <td class="rotate">walnut </td>
            <td>1 pc</td>
            <td>2 pc</td>
        </tr>
        <tr>
            <td>1 </td>
            <td>2 </td>
            <td>3 </td>
            <td>4</td>
            <td>5 </td>
            <td>6 </td>
            <td colspan="11">7 </td>
            <td>8 </td>
            <td>9 </td>
            <td>10 </td>
            <td colspan="2">11 </td>
            <td>12 </td>
        </tr>
        <tr>
            <td>1 </td>
            <td>750 </td>
            <td> 1380</td>
            <td>1</td>
            <td>ev2 </td>
            <td>c139</td>
            <td>x </td>
            <td>&nbsp; </td>
            <td>&nbsp; </td>
            <td>&nbsp; </td>
            <td>&nbsp; </td>
            <td>&nbsp; </td>
            <td>&nbsp; </td>
            <td>&nbsp; </td>
            <td>&nbsp; </td>
            <td>&nbsp; </td>
            <td>&nbsp; </td>
            <td>&nbsp; </td>
            <td>&nbsp; </td>
            <td>&nbsp; </td>
            <td>x </td>
            <td>&nbsp; </td>
            <td>&nbsp; </td>
        </tr>
    </table> ';

// $document->loadHtml($html);
$table_1 =  "1table.html";
$table_2 = "2table.html";
$page = file_get_contents($table_2);
$document->load_html($page);

$document->setPaper('A3', 'landscape');
$document->render();
$document->stream("weblesson", array("Attachment" => 0));
