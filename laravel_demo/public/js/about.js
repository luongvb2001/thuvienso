// Ẩn tất cả .accordion trừ accordion đầu tiên
$("#accordiondemo .accordion:not(:first)").hide();
// Áp dụng sự kiện click vào thẻ h3
$("#accordiondemo h3").click(function(){
	// chọn .accordion (do phần tử đi đi ngay sau phần tử h3 nên ta dùng .next())
  $accordion = $(this).next();
  // Kiểm tra nếu đang ẩn thì sẽ hiện và ẩn các phần tử khác
  // Nếu đang hiện thì click vào h3 sẽ ẩn
  if ($accordion.is(':hidden') === true) {
    $("#accordiondemo .accordion").slideUp();
    $accordion.slideDown();
  } else {
    $accordion.slideUp();
  }
});