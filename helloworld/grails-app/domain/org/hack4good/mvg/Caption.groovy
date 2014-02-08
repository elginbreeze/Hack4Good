package org.hack4good.mvg

class Caption {

    public int captionId
    public int videoId
    String caption
    public int startingPoint
    public int endPoint
    int accuracy

    static belongsTo = [video : Video]

    static hasMany = [translations: Translation]

    static constraints = {
        startingPoint(unique: true, blank: false)
        endPoint(unique: true, blank: false)
    }
}
