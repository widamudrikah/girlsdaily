import React from "react";
import DetailArtikel from "./DetailArtikel";

const Artikel = ({ data }) => {
    console.log(data);
    // produk = Array.from(data)
    return (
        <>
            <div className="max-w-[1240px] py-4 mt-5 " id="artikel">
                <div className="grid md:grid-cols-3 pl-2">
                    <img src="/images/beauty RECOMMEND 11.png" alt="" />
                </div>
                <div className="max-w-[1240px] mx-auto pl-8 pr-8 py-2 grid md:grid-cols-5 gap-4">
                    {data.map((artikel) => (
                        <div className="rounded-xl relative md:max-h-[200px]">
                            <a href={`/artikel/${artikel.id}`} component={DetailArtikel}>
                                <div className="absolute w-full h-full bg-slate-600/50 rounded-xl text-white">
                                    <p className="font-bold text-2xl px-2 pt-8 capitalize text-center font-raleway shadow-slate-800">
                                        {artikel.judul_artikel}
                                    </p>
                                </div>
                                <img
                                    className="max-h-[260px] md:max-h-[200px] w-full object-cover rounded-xl"
                                    src={`/storage/${artikel.foto_artikel}`}
                                    alt="/"
                                />
                            </a>
                        </div>
                    ))}
                </div>
            </div>
        </>
    );
};

export default Artikel;
