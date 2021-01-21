<?php 
interface motor{
  public function gas();
  public function rem();
}
 
class komponen implements motor{
  public function gas()
  {
    return "Jalan...";
  }
  public function rem()
  {
    return "Berhenti...";
  }
}

$komponen_baru = new komponen();
echo $komponen_baru->rem();
?>
