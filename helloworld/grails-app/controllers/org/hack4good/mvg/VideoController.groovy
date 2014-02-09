package org.hack4good.mvg

class VideoController {

    def index() {}

    def create() {
        def v = new Video(params)
        v.save()
    }

    def get() {
        def p = Video.get(1)
        return p
    }
}
