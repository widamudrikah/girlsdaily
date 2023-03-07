import React from 'react'
import Carousel from '../components/Carousel'
import Information from '../components/Information'
import Quotes from '../components/Quotes'
import Layout from '../Layout/Layout'
import Galeri from '../components/Galeri'
import TypeProduk from '../components/TypeProduk'
import TopBrand from '../components/TopBrand'
import Brand from '../components/Brand'
import Artikel from '../components/Artikel'


export default function landing({ artikel }) {
  return (
    <div>

    <Layout title={"Girl's Daily"}>

      <Carousel />
      <Quotes />

      {/* <Brand data={produk} /> */}

      <TypeProduk />
      <TopBrand />
      <Artikel data={artikel}/>

      <Galeri />
      <Information />
    </Layout>
    </div>
  )
}
