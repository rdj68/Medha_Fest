document.addEventListener("DOMContentLoaded", function () {
  let mainGrid = document.getElementById("membersGrid");
  let centralMembers = [
    { name: "Vivekanand_Thorat", inst: "Amrutvahini College of Engineering" },
    { name: "Aditya_Gadge", inst: "Amrutvahini College of Engineering" },
    { name: "Suraj_Thorat", inst: "Amrutvahini College of Engineering" },
    { name: "Rajeev_Singh", inst: "Amrutvahini College of Engineering" },
    { name: "Narendra_Wakhare", inst: "Amrutvahini College of Engineering" },
    { name: "Prajwal_Ukhalkar", inst: "Amrutvahini College of Engineering" },
    { name: "Anantha_Atole", inst: "Amrutvahini College of Engineering" },
    { name: "Saurabh_Mahajan", inst: "Amrutvahini College of Engineering" },
  ];

  centralMembers.forEach((member) => {
    let mainDiv = document.createElement("div");
    mainDiv.className =
      "flex cursor-pointer hover:scale-105 transition-all duration-300 ease-out justify-center rounded-lg items-center p-2 gap-4 border-[1px] backdrop-blur-sm bg-blue-200/30 border-gray-500";
    let image = document.createElement("img");
    image.className = "h-[130px] object-contain w-[130px] rounded-full";
    image.alt = member.name;
    image.src = `developers/${member.name}.png`;
    let div = document.createElement("div");
    div.className =
      "flex items-center justify-center gap-4 h-full w-full text-center flex-col";
    let para1 = document.createElement("p");
    para1.className = "text-white text-2xl font-bold";
    para1.innerHTML = member.name.replace("_", " ");
    let para2 = document.createElement("p");
    para2.className = "text-white font-bold";
    para2.innerHTML = member.inst;
    div.appendChild(para1);
    div.appendChild(para2);
    mainDiv.appendChild(image);
    mainDiv.appendChild(div);
    mainGrid.appendChild(mainDiv);
  });
});
