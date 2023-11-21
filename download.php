public function download($id) {
  $detail = pesanmakam::findOrFail($id);
  $name = date('YmdHis') . ".pdf";
  $data = PDF::loadView('guest/log/pdf', compact('detail'))->setPaper('a4')->setWarnings(false)->save('myfile.pdf');
  $data->save('folder_name/'.$name);
  header('Location: /'); // Replace '/' with the URL you want to redirect to
}
