<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once APPPATH . 'third_party/dompdf/autoload.inc.php';

use Dompdf\Dompdf;

class Pdf
{
    protected function ci()
    {
        return get_instance();
    }
    public function generate($view, $data = array(), $filename = 'bukti_pendaftaran', $stream = TRUE, $paper = 'A4', $orientation = 'portrait')
    {
        $dompdf = new Dompdf();
        $html = $this->ci()->load->view($view, $data, TRUE);
        $dompdf->loadHtml($html);
        $dompdf->setPaper($paper, $orientation);

        $dompdf->render();
        if ($stream) {
            $dompdf->stream($filename . ".pdf", array("Attachment" => 0));
        } else {
            return $dompdf->output();
        }
    }
}
