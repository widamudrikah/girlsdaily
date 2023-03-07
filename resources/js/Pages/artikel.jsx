import React from 'react'
import Artikel from '../components/Artikel'
import Layout from '../Layout/Layout'
import DetailArtikel from '../components/DetailArtikel'

export default function artikel({artikel}) {
  console.log(artikel);
  return (
    <div className='bg-slate-50'>
      <Layout>
        <DetailArtikel data={artikel}/>
      </Layout>
    </div>
  )
}
