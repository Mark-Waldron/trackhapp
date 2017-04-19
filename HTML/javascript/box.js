function modify_qty(val) {
    var qty = document.getElementById('qty').value;
    var new_qty = parseInt(qty,10) + val;
    
    if (new_qty < 0) {
        new_qty = 0;
    }
	if(new_qty == 2000)
	{
		
		alert("Congratulations, you have consumed the recomand daily amount of water!");

	}
    
    document.getElementById('qty').value = new_qty + "ml";
    return new_qty;
}

function modify_qty_2(val_2) {
    var qty_2 = document.getElementById('qty_2').value;
    var new_qty_2 = parseInt(qty_2,10) + val_2;
    
    if (new_qty_2 < 0) {
        new_qty_2 = 0;
    }
	if(new_qty_2 == 5)
	{
		
		alert("Congratulations, you have consumed the recomand daily amount of fruit!");

	}
    
    document.getElementById('qty_2').value = new_qty_2;
    return new_qty_2;
}