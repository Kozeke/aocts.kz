export const func = {
    getDateString(strDate){
        const monthNames = [
            "Января", "Февраля", "Марта", "Апреля", "Мая", "Июня",
            "Июля", "Августа", "Сентября", "Октября", "Ноября", "Декабря"
        ]
        var time = new Date(strDate)
        let date = time.getDate()
        return monthNames[Number(time.getMonth())] + ' ' + date + ', ' + time.getFullYear()
    },
    getDateTime(strDate){
        var time = new Date(strDate)
        let hours = time.getHours()
        hours = hours.length === 1 ? '0' + hours : hours
        let minuts = time.getMinutes()
        minuts = minuts.length === 1 ? '0' + minuts : minuts
        return hours + ' : ' + minuts
    }
 }