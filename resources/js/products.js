/* == DATA PRODUK == */
const PRODUCTS = {
  paving: {
    title: "Paving Block",
    description: "Produk beton pracetak unggulan untuk berbagai kebutuhan infrastruktur.",
    useCases: [
      "Jalan lingkungan & perumahan",
      "Area parkir & pergudangan",
      "Kawasan industri & komersial",
      "Trotoar & taman kota"
    ],
    images: [
      { src: "/images/paving/bata.png", alt: "Paving block model bata", primary: true },
      { src: "/images/paving/dadu.png", alt: "Paving block model dadu" },
      { src: "/images/paving/kotak.png", alt: "Paving block model kotak" },
      { src: "/images/paving/heksa.png", alt: "Paving block model heksagon" },
      { src: "/images/paving/grassblock.png", alt: "Paving block model grassblock" },
      { src: "/images/paving/3-dimensi.png", alt: "Paving block model 3 dimensi" },
      { src: "/images/paving/topi-uskup.png", alt: "Paving block model topi uskup" }
    ],
    about: {
      description: "Paving Block diproduksi menggunakan mesin berstandar industri dengan mutu beton K100–K500.",
      highlights: [
        "Memenuhi standar SNI & ISO",
        "Tahan terhadap beban lalu lintas",
        "Ukuran presisi & konsisten",
        "Finishing rapi & siap pasang"
      ]
    },
    prices: [
      { mutu: "K100", cm6: 75000, cm8: 80000, dim3: 90000, unit: "m²" },
      { mutu: "K175", cm6: 85000, cm8: 90000, dim3: 100000, unit: "m²" },
      { mutu: "K200", cm6: 95000, cm8: 100000, dim3: 110000, unit: "m²" },
      { mutu: "K250", cm6: 100000, cm8: 105000, dim3: 115000, unit: "m²" },
      { mutu: "K300", cm6: 105000, cm8: 110000, dim3: 120000, unit: "m²" },
      { mutu: "K350", cm6: null, cm8: 120000, dim3: 130000, unit: "m²" },
      { mutu: "K400", cm6: null, cm8: 130000, dim3: 140000, unit: "m²" },
      { mutu: "K500", cm6: null, cm8: 145000, dim3: 155000, unit: "m²" }
    ],
    models: [
      { name: "Dadu 10×10", qty: 100, unit: "pcs/m²" },
      { name: "Bata 10×20", qty: 50, unit: "pcs/m²" },
      { name: "Kotak 20×20", qty: 25, unit: "pcs/m²" },
      { name: "Kotak besar 40×40", qty: 6.25, unit: "pcs/m²" },
      { name: "Heksagon 0 20", qty: 28, unit: "pcs/m²" },
      { name: "Heksagon 0 18", qty: 36, unit: "pcs/m²" },
      { name: "Heksagon 0 17", qty: 37, unit: "pcs/m²" },
      { name: "Rumput (grassblock)", qty: 12.5, unit: "pcs/m²" }
    ],
    colors: [
      { name: "Merah", price: 8000, unit: "m²" },
      { name: "Kuning", price: 8000, unit: "m²" },
      { name: "Hitam", price: 9000, unit: "m²" },
      { name: "Hijau", price: 10000, unit: "m²" }
    ]
  },

  kanstein: {
    title: "Kanstein",
    description: "Beton pracetak sebagai pembatas jalan dan trotoar.",
    useCases: ["Pembatas jalan", "Trotoar", "Median jalan"],
    images: [
      { src: "/images/kanstein/kerb1.png", alt: "Kanstein tipe 1", primary: true },
      { src: "/images/kanstein/kerb2.png", alt: "Kanstein tipe 2" },
      { src: "/images/kanstein/kerb3.png", alt: "Kanstein tipe 3" }
    ],
    about: {
      description: "Kanstein berfungsi sebagai elemen pembatas antara badan jalan dan area pedestrian.",
      highlights: [
        "Kuat dan presisi dimensi",
        "Tahan terhadap cuaca luar ruang",
        "Mudah dipasang dan dirawat"
      ]
    },
    prices: [
      { type: "Kerb I", size: "60×30×20", price: 57000, unit: "pcs" },
      { type: "Kerb I", size: "40×30×20", price: 40000, unit: "pcs" },
      { type: "Kerb I", size: "40×20×20", price: 33000, unit: "pcs" },
      { type: "Kerb I", size: "40×15×12", price: 25000, unit: "pcs" },
      { type: "Kerb L", size: "20×30×20", price: 20000, unit: "pcs" },
      { type: "Kerb L", size: "40×30×26", price: 40000, unit: "pcs" },
      { type: "Kerb L", size: "20×30×26", price: 20000, unit: "pcs" },
      { type: "Kerb S", size: "40×15×30", price: 33000, unit: "pcs" }
    ]
  },

  uditch: {
    title: "U-Ditch",
    description: "Saluran beton pracetak untuk sistem drainase terbuka.",
    useCases: ["Drainase jalan", "Saluran kawasan", "Infrastruktur"],
    images: [
      { src: "/images/uditch/uditch1.png", alt: "U-Ditch ukuran kecil", primary: true },
      { src: "/images/uditch/uditch2.png", alt: "U-Ditch ukuran besar" }
    ],
    about: {
      description: "U-Ditch dirancang untuk sistem drainase terbuka dengan kapasitas aliran besar.",
      highlights: [
        "Menggunakan tulangan baja",
        "Pemasangan cepat dan presisi",
        "Tahan beban lalu lintas"
      ]
    },
    prices: [
      { size: "30×40×100×7,5", spec: "Tulangan K300", price: 450000, unit: "pcs" },
      { size: "40×40×100×7,5", spec: "Tulangan K300", price: 550000, unit: "pcs" },
      { size: "50×50×100×7,5", spec: "Tulangan K300", price: 650000, unit: "pcs" },
      { size: "60×60×100×7,5", spec: "Tulangan K300", price: 900000, unit: "pcs" },
      { size: "80×80×100×7,5", spec: "Tulangan K300", price: 1500000, unit: "pcs" },
      { size: "100×100×100×7,5", spec: "Tulangan K350", price: 2700000, unit: "pcs" }
    ]
  },

  buis: {
    title: "Buis Beton",
    description: "Pipa beton pracetak untuk saluran air dan gorong-gorong.",
    useCases: ["Drainase", "Irigasi", "Saluran air"],
    images: [
      { src: "/images/buis/buis1.png", alt: "Buis beton ukuran besar", primary: true },
      { src: "/images/buis/buis2.png", alt: "Buis beton ukuran kecil" }
    ],
    about: {
      description: "Buis Beton digunakan sebagai saluran air bawah tanah dengan daya tahan tinggi.",
      highlights: [
        "Tersedia varian tulangan dan non-tulangan",
        "Cocok untuk drainase dan irigasi",
        "Umur pakai panjang"
      ]
    },
    prices: [
      { size: "80×50×10", spec: "Tulangan K300", price: 700000, unit: "pcs" },
      { size: "80×50×10", spec: "Tulangan K225", price: 600000, unit: "pcs" },
      { size: "60×50×10", spec: "Tulangan K300", price: 450000, unit: "pcs" },
      { size: "60×50×10", spec: "Nock K200", price: 175000, unit: "pcs" },
      { size: "50×50×5", spec: "Nock K200", price: 125000, unit: "pcs" },
      { size: "40×50×5", spec: "Nock K200", price: 100000, unit: "pcs" },
      { size: "20×100×5", spec: "K200", price: 80000, unit: "pcs" },
      { size: "20×100×5", spec: "K250", price: 110000, unit: "pcs" }
    ]
  },

  boxculvert: {
    title: "Box Culvert",
    description: "Saluran beton pracetak tertutup untuk beban berat.",
    useCases: ["Gorong-gorong", "Drainase tertutup", "Jalan raya"],
    images: [
      { src: "/images/boxculvert/box1.png", alt: "Box culvert ukuran sedang", primary: true },
      { src: "/images/boxculvert/box2.png", alt: "Box culvert ukuran besar" }
    ],
    about: {
      description: "Box Culvert dirancang untuk menahan beban berat dan lalu lintas.",
      highlights: [
        "Mampu menahan beban berat",
        "Presisi tinggi produksi pabrik",
        "Minim perawatan jangka panjang"
      ]
    },
    prices: [
      { size: "60×80×120×10", price: 2600000, unit: "pcs" },
      { size: "80×80×100×15", price: 2900000, unit: "pcs" },
      { size: "100×100×100×15", price: 4000000, unit: "pcs" }
    ]
  }
};

function renderAbout(data) {
  document.getElementById("about-desc").textContent = data.description;

  const ul = document.getElementById("about-list");
  ul.innerHTML = "";

  data.highlights.forEach(item => {
    ul.innerHTML += `
      <li class="flex items-start gap-2">
        <span class="mt-1 h-2 w-2 bg-gray-900 rounded-full"></span>
        <span>${item}</span>
      </li>
    `;
  });
}

function renderPrices(prices) {
  const thead = document.getElementById("price-head");
  const tbody = document.getElementById("price-table");

  thead.innerHTML = "";
  tbody.innerHTML = "";

  if (!prices || prices.length === 0) {
    tbody.innerHTML = `
      <tr>
        <td class="border px-3 py-2 text-center text-gray-500">
          Data harga belum tersedia
        </td>
      </tr>
    `;
    return;
  }

  const columns = [...new Set(prices.flatMap(p => Object.keys(p)))];

  // Render header
  columns.forEach(col => {
    thead.innerHTML += `
      <th class="border px-3 py-2 capitalize">
        ${formatHeader(col)}
      </th>
    `;
  });

  // Render row
  prices.forEach(row => {
    tbody.innerHTML += `
      <tr>
        ${columns.map(col => `
          <td class="border px-3 py-2">
            ${row[col] ?? "-"}
          </td>
        `).join("")}
      </tr>
    `;
  });
}

function formatHeader(key) {
  const map = {
    mutu: "Mutu",
    cm6: "6 cm",
    cm8: "8 cm",
    dim3: "3 Dimensi",
    type: "Tipe",
    size: "Ukuran",
    spec: "Spesifikasi",
    price: "Harga",
    unit: "Satuan"
  };

  return map[key] || key.replace(/_/g, " ");
}

function renderModels(models) {
  const tbody = document.getElementById("model-table");
  tbody.innerHTML = "";

  if (!models || models.length === 0) return;

  models.forEach(m => {
    tbody.innerHTML += `
      <tr>
        <td class="border px-3 py-2">${m.name}</td>
        <td class="border px-3 py-2">${m.qty}</td>
        <td class="border px-3 py-2">${m.unit}</td>
      </tr>
    `;
  });
}

function renderColors(colors) {
  const tbody = document.getElementById("color-table");
  tbody.innerHTML = "";

  if (!colors || colors.length === 0) return;

  colors.forEach(c => {
    tbody.innerHTML += `
      <tr>
        <td class="border px-3 py-2">${c.name}</td>
        <td class="border px-3 py-2">${c.price}</td>
        <td class="border px-3 py-2">${c.unit}</td>
      </tr>
    `;
  });
}

function renderUseCases(items) {
  const ul = document.getElementById("product-usecases");
  ul.innerHTML = "";

  if (!items || items.length === 0) {
    ul.innerHTML = `
      <li class="text-gray-500 text-sm">
        Informasi penggunaan belum tersedia
      </li>
    `;
    return;
  }

  items.forEach(text => {
    ul.innerHTML += `
      <li class="flex items-start gap-3">
        <span class="mt-1 h-2 w-2 rounded-full bg-red-600"></span>
        <span>${text}</span>
      </li>
    `;
  });
}

function renderImages(images) {
  const main = document.getElementById("mainImage");
  const thumbs = document.getElementById("product-thumbs");

  thumbs.innerHTML = "";

  if (!images || images.length === 0) {
    main.src = "/images/placeholder.png";
    main.alt = "No image";
    return;
  }

  const primary = images.find(i => i.primary) || images[0];
  main.src = primary.src;
  main.alt = primary.alt || "";

  images.forEach(img => {
    thumbs.innerHTML += `
      <button
        onclick="changeMainImage('${img.src}', '${img.alt || ""}')"
        class="border rounded-lg p-1 hover:border-red-600">
        <img
          src="${img.src}"
          alt="${img.alt || ""}"
          class="h-14 w-20 object-contain">
      </button>
    `;
  });
}

window.changeMainImage = function (src, alt) {
  const main = document.getElementById("mainImage");
  main.src = src;
  main.alt = alt;
};

/* == PILIH PRODUK == */
window.selectProduct = function (key) {
  const p = PRODUCTS[key];
  if (!p) return;

  document.getElementById("product-title").textContent = p.title;
  document.getElementById("product-desc").textContent = p.description;

  renderImages(p.images);
  renderUseCases(p.useCases);

  syncAccordionsWithProduct(p);

  if (p.about) renderAbout(p.about);
  if (p.prices) renderPrices(p.prices);
  if (p.models) renderModels(p.models);
  if (p.colors) renderColors(p.colors);

  resetAccordionUI();
};  

window.changeImageBySrc = function (src) {
  const main = document.getElementById("mainImage");
  if (main) main.src = src;
};



/* == GANTI GAMBAR == */
window.changeImage = function (imgEl) {
    const mainImage = document.getElementById('mainImage');
    if (!mainImage || !imgEl) return;

    mainImage.src = imgEl.src;

    document
        .querySelectorAll('.thumb-active')
        .forEach(el => el.classList.remove('thumb-active'));

    imgEl.classList.add('thumb-active');
};


/* == SWITCH SEKTOR == */
window.switchSector = function (sector) {
  const manufaktur = document.getElementById('sector-manufaktur');
  const konstruksi = document.getElementById('sector-konstruksi');
  const productList = document.getElementById('manufaktur-product-list');

  document
    .querySelectorAll('.sector-btn')
    .forEach(btn => btn.classList.remove('active'));

  if (sector === 'manufaktur') {
    manufaktur.classList.remove('hidden');
    konstruksi.classList.add('hidden');
    productList.classList.remove('hidden');
  } else {
    manufaktur.classList.add('hidden');
    konstruksi.classList.remove('hidden');

    productList.classList.add('hidden');
  }

  if (sector !== 'manufaktur') {
    resetAccordionUI();
  }


  document
    .querySelector(`.sector-btn[data-sector="${sector}"]`)
    ?.classList.add('active');
};



/* == ACCORDION == */
window.toggleAccordion = function (index) {
  document.querySelectorAll('[id^="content-"]').forEach(el => {
    el.classList.add('hidden');
  });

  document.querySelectorAll('[id^="icon-"]').forEach(ic => {
    ic.textContent = '+';
  });

  const content = document.getElementById(`content-${index}`);
  const icon = document.getElementById(`icon-${index}`);

  if (content && icon) {
    content.classList.remove('hidden');
    icon.textContent = '−';
  }
};


function resetAccordion() {
    document.querySelectorAll('[id^="content-"]').forEach(el => {
        el.classList.add('hidden');
    });

    document.querySelectorAll('[id^="icon-"]').forEach(ic => {
        ic.textContent = '+';
    });
}

function resetAccordionUI() {
  document.querySelectorAll('[id^="content-"]').forEach(el => {
    el.classList.add('hidden');
  });

  document.querySelectorAll('[id^="icon-"]').forEach(ic => {
    ic.textContent = '+';
  });

  // Default buka accordion pertama
  const first = document.getElementById('content-0');
  const firstIcon = document.getElementById('icon-0');

  if (first && firstIcon) {
    first.classList.remove('hidden');
    firstIcon.textContent = '−';
  }
}

function syncAccordionsWithProduct(product) {
  const map = {
    about: !!product.about,
    prices: Array.isArray(product.prices) && product.prices.length > 0,
    models: Array.isArray(product.models) && product.models.length > 0,
    colors: Array.isArray(product.colors) && product.colors.length > 0
  };

  document.querySelectorAll("[data-accordion]").forEach(section => {
    const key = section.dataset.accordion;

    if (!map[key]) {
      section.classList.add("hidden");
    } else {
      section.classList.remove("hidden");
    }
  });
}

const ALAT_BERAT = {
    excavator: {
        label: 'Excavator',
        image: '/images/konstruksi/excavator.jpg'
    },
    bulldozer: {
        label: 'Bulldozer',
        image: '/images/konstruksi/bulldozer.jpg'
    },
    batu_split: {
        label: 'Batu Split',
        image: '/images/konstruksi/batu-split.jpg'
    }
};

window.selectAlat = function (key) {
    const data = ALAT_BERAT[key];
    if (!data) return;

    // Ganti gambar
    const img = document.getElementById('konstruksiImage');
    img.src = data.image;
    img.alt = data.label;

    // Update active state
    document.querySelectorAll('.variant').forEach(el => {
        el.classList.remove('active');
    });

    event.target.classList.add('active');
};


