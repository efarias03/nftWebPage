document.querySelector('.top-nfts-cards').addEventListener('wheel', event =>{
    if (event.deltaY > 0) {
        event.target.scrollBy (-450 , 0)
    } else (
        event.target.scrollBy (450 , 0)
    )
    event.preventDefault();})

document.querySelector('.nft-creators').addEventListener('wheel', event =>{
    if (event.deltaY > 0) {
        event.target.scrollBy (-450 , 0)
    } else (
        event.target.scrollBy (450 , 0)
    )
    event.preventDefault();})
