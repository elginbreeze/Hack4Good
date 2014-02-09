package org.hack4good.mvg

import org.junit.Test
import static org.junit.Assert.assertEquals

/**
 * See the API for {@link grails.test.mixin.domain.DomainClassUnitTestMixin} for usage instructions
 */
class VideoTest {

    @Test
    void shouldSaveAndGet() {
        def v = new Video(url: "http://www.youtube.com", subject: "somestuff", name: "first game")
        v.save()
        def p = Video.get(1)
        assertEquals('first game', p.name)
    }
}