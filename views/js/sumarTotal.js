

let Total = $("#totalB").val()

var f = $("#basic").val()

// console.log(Total)
// console.log(f)

var suma = Number(Total) + Number(f)

$("#showTotal").html("TOTAL : $" + suma)

$("#total").val(suma)





$("#fullv").on("click",()=>{

	var f = $("#full").val()

	var suma = Number(Total) + Number(f)

	$("#showTotal").html("TOTAL : $" + suma)
	$("#total").val(suma)
})
$("#vipv").on("click",()=>{

	var f = $("#vip").val()

	var suma = Number(Total) + Number(f)

	$("#showTotal").html("TOTAL : $" + suma)

	$("#total").val(suma)
})
$("#basicv").on("click",()=>{

	var f = $("#basic").val()

	var suma = Number(Total) + Number(f)

	$("#showTotal").html("TOTAL : $" + suma)

	$("#total").val(suma)
})