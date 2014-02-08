package org.hack4good.mvg

class Video {

    int videoId
    String name
    String url
    String subject

    static hasMany = [captions : Caption]

    static constraints = {
        subject(blank: false)
        url(unique: true, blank: false)
    }
}
