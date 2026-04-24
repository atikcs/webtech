const form = document.getElementById("student-form")

const rollInput = document.getElementById("roll")
const nameInput = document.getElementById("name")

const addBtn = document.getElementById("addBtn")

const list = document.getElementById("student-list")

const countText = document.getElementById("count")
const attendanceText = document.getElementById("attendance")

const search = document.getElementById("search")

let presentCount = 0



/* enable add button */

nameInput.addEventListener("input",function(){

addBtn.disabled = nameInput.value.trim()===""

})



/* add student */

form.addEventListener("submit",function(e){

e.preventDefault()

const roll = rollInput.value.trim()
const name = nameInput.value.trim()

if(name==="") return



const li = document.createElement("li")
li.className="student"



const span = document.createElement("span")

span.textContent = `${roll} - ${name}`



/* present checkbox */

const check = document.createElement("input")
check.type="checkbox"

check.addEventListener("change",function(){

if(check.checked){

li.classList.add("present")
presentCount++

}else{

li.classList.remove("present")
presentCount--

}

updateAttendance()

})



/* edit */

const edit = document.createElement("button")
edit.className="edit"
edit.innerHTML='<i class="fa-solid fa-pen"></i>'

edit.onclick=function(){

let newRoll = prompt("Enter roll",roll)
let newName = prompt("Enter name",name)

if(newName){
span.textContent = `${newRoll} - ${newName}`
}

}



/* delete */

const del = document.createElement("button")
del.className="delete"
del.innerHTML='<i class="fa-solid fa-trash"></i>'

del.onclick=function(){

if(confirm("Are you sure you want to delete this student?")){

if(check.checked) presentCount--

li.remove()

updateCount()
updateAttendance()

}

}



li.appendChild(span)
li.appendChild(check)
li.appendChild(edit)
li.appendChild(del)

list.appendChild(li)



rollInput.value=""
nameInput.value=""

addBtn.disabled=true

updateCount()

})



/* total students */

function updateCount(){

countText.textContent="Total students: "+list.children.length

}



/* attendance */

function updateAttendance(){

let total=list.children.length
let absent=total-presentCount

attendanceText.textContent=
`Present: ${presentCount} | Absent: ${absent}`

}



/* search */

search.addEventListener("input",function(){

let text=search.value.toLowerCase()

document.querySelectorAll(".student").forEach(function(li){

let name=li.textContent.toLowerCase()

li.style.display=name.includes(text) ? "flex":"none"

})

})



/* sort*/

document.getElementById("sortBtn").onclick=function(){

let items=[...document.querySelectorAll(".student")]

items.sort((a,b)=>{

let nameA = a.querySelector("span").textContent.split("-")[1].trim().toLowerCase()
let nameB = b.querySelector("span").textContent.split("-")[1].trim().toLowerCase()

return nameA.localeCompare(nameB)

})

items.forEach(i=>list.appendChild(i))

}



/* highlight first */

document.getElementById("highlightBtn").onclick=function(){

document.querySelectorAll(".student").forEach(s=>{
s.classList.remove("highlight")
})

let first=document.querySelector(".student")

if(first) first.classList.add("highlight")

}