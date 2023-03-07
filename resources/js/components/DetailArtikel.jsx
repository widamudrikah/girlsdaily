import React from "react";

const Artikel = ( {data} ) => {
    console.log(data);
    // produk = Array.from(data)
    return (
            <div className=" py-4 mt-5 h-full flex justify-center w-screen" id="artikel">
                <div className=" mx-auto px-52 py-2">
                        <div className="rounded-xl">
                            <img
                                className="max-h-[360px] md:max-h-[400px] w-full object-cover rounded-xl justify-center drop-shadow-xl"
                                src={`/storage/${data.foto_artikel}`}
                                alt="/"
                            />
                                <p className="font-bold text-3xl px-2 pt-8 pb-10 uppercase text-center font-oswand shadow-slate-800">
                                    {data.judul_artikel}
                                </p>
                            <h1 className="a font-poppins font-mediump text-justify">{data.artikel}</h1>
                        </div>
                </div>                                                                                  
            </div>
    );
};

export default Artikel;
